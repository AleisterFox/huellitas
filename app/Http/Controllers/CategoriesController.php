<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $fileName = time() . $request->image?->getClientOriginalName();

        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('images'), $fileName);
        }

        $params = $request->all();
        $params['image'] = $fileName;

        Category::create($params);

        return redirect()->route('categorias.index');
    }

    public function update(Request $request, $category)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
        ]);

        $category = Category::find($category);

        $category->update($request->all());

        return redirect()->route('categorias.index');
    }

    public function destroy($category)
    {
        $category = Category::find($category);

        $category->delete();

        return redirect()->route('categorias.index');
    }
}
