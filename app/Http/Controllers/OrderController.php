<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Services\CartService;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::whereNotNull('preference_response')->get()
        ]);
    }

    // https://www.youtube.com/watch?v=pCYpPqGoUqM&ab_channel=C%C3%B3digosdeProgramaci%C3%B3n-MR
    // https://github.com/mroblesdev/checkout-mercadopago-php-js
    public function store(Request $request, CartService $cartService)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);

        $params = $request->all();
        $params['total'] = $cartService->getTotal();

        $order = Order::create($params);

        foreach($cartService->getProducts() as $product) {
            $order->products()->attach(
                $product['product']->id,
                [
                    'quantity' => $product['quantity'],
                    'price' => $product['product']->price
                ]
            );
        }

        MercadoPagoConfig::setAccessToken(env('MERCADO_PAGO_TOKEN'));
        MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);

        $client = new PreferenceClient();

        $products = $order->products->flatMap(function($product) {
            return [
                'id' => "PROD-{$product->id}",
                'name' => $product->name,
                'quantity' => $product->pivot->quantity,
                'unit_price' => (float) $product->pivot->price,
            ];
        });

        $preference = $client->create([
            'items' => [$products],
            "auto_return" => "approved",
            "back_urls" => [
                "success" => route('order.callback', ['order' => $order, 'status' => 'success']),
                "failure" => route('order.callback', ['order' => $order, 'status' => 'failure']),
                "pending" => route('order.callback', ['order' => $order, 'status' => 'pending'])
            ],
            "statement_descriptor" => "Huellitas",
            "external_reference" => "CDP001"
        ]);

        $order->update([
            'preferences_id' => $preference->id 
        ]);
    
        return redirect($preference->init_point);
    }

    public function callback(Order $order, Request $request, CartService $cartService)
    {
        if ($request->has('preference_id') && $request->preference_id === $order->preferences_id) {
            $order->update([
                'preference_response' => $request->all()
            ]);

            $order->updateStatus();
            $cartService->clear();
            return redirect('/')->with('message', $order->getStatusMessage());
        }
    }

    public function notification(Request $request)
    {
        $data = $request->all();
        $order = Order::where('preferences_id', $data['id'])->first();

        if ($order) {
            $order->update([
                'preference_response' => $data
            ]);

            $order->updateStatus();
        }
    }
}
