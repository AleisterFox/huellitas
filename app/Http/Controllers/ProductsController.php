<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    public function editCategory($product)
    {
        $product = Product::find($product);

        return view('admin.products.categories', [
            'productCategoriesIDS' => $product->categories->pluck('id')->toArray(),
            'product' => $product,
            'categories' => Category::all()
        ])->render();
    }

    public function updateCategory(Request $request, $product)
    {
        $product = Product::find($product);

        $product->categories()->sync($request->categories);

        return redirect()->route('productos.index');
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
        $fileName = time() . $request->image?->getClientOriginalName();
        $params = $request->all();

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('images'), $fileName);
            $params['image'] = $fileName;
        }

        $product = Product::find($product);

        $product->update($params);

        return redirect()->route('productos.index');
    }

    public function destroy($product)
    {
        $product = Product::find($product);

        $product->delete();

        return redirect()->route('productos.index');
    }
}
