<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($product)
    {
        $product = Product::find($product);
        
        $product->delete();

        return redirect()->route('productos.index');
    }
}
