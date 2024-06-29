<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartService;
use App\Models\Product;
use Illuminate\Support\Facades\Blade;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request, CartService $cart)
    {
        if ($request->has('product_id') && $request->has('quantity')) {
            $product = Product::find($request->product_id);
            $cart->add([
                'product' => $product,
                'quantity' => $request->quantity
            ]);
        }
    }

    public function updateCart(Request $request, CartService $cart)
    {   
        $html = "";

        if ($request->has('product_id') && $request->has('quantity')) {
            $cart->update($request->product_id, $request->quantity);

            $html = Blade::render(<<<HTML
                @include('landing._carrito_left')
                @include('landing._carrito_right')
            HTML);
        }

        return $html;
    }

    public function removeFromCart(Request $request, CartService $cart)
    {
        if ($request->has('product_id')) {
            $cart->remove($request->product_id);
        }
    }
}
