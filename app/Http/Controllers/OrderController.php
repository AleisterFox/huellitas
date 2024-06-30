<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Services\CartService;

class OrderController extends Controller
{
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

        $cartService->clear();

        dd($order);
    }
}
