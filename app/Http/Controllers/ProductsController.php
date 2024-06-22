<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        $fileName = time() . $request->image?->getClientOriginalName();

        $params = $request->all();

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('images'), $fileName);
        }

        $params['image'] = $fileName;

        Product::create($params);

        return redirect()->route('productos.index');
    }

    public function update(Request $request, $product)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($product);

        $product->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($product)
    {
        $product = Product::find($product);

        $product->delete();

        return redirect()->route('productos.index');
    }
}
