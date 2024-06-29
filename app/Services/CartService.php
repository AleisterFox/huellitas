<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartService
{
    public function add($product)
    {
        $cart = Session::get('cart', []);

        $found = false;
        foreach ($cart as &$item) {
            if ($item['product']->id == $product['product']->id) {
                $item['quantity'] += $product['quantity'];
                $found = true;
                break;
            }
        }
    
        if (!$found) {
            $cart[] = $product;
        }
    
        Session::put('cart', $cart);
    }

    public function remove($productId)
    {
        $cart = Session::get('cart', []);

        $index = -1;
        foreach ($cart as $key => $item) {
            if ($item['product']->id == $productId) {
                $index = $key;
                break;
            }
        }
    
        if ($index !== -1) {
            unset($cart[$index]);
            $cart = array_values($cart); // Reindexar el array después de eliminar el elemento
            Session::put('cart', $cart);
        }
    }

    public function update($productId, $quantity)
    {
        $cart = Session::get('cart', []);

        foreach ($cart as &$item) {
            if ($item['product']->id == $productId) {
                $item['quantity'] = $quantity;
                break;
            }
        }
    
        Session::put('cart', $cart);
    }

    public static function clear()
    {
        Session::forget('cart');
    }

    public static function getTotal()
    {
        $total = 0;
        $cart = Session::get('cart', []);
    
        foreach ($cart as $item) {
            $total += $item['product']->price * $item['quantity'];
        }
    
        return number_format($total, 2, '.', '');
    }

    public static function getProducts()
    {
        return Session::get('cart');
    }

    public static function getCount()
    {
        return Session::get('cart') ? count(Session::get('cart')) : 0;
    }
}