<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetCategory;

class PetCategoriesController extends Controller
{
    public function index()
    {
        return view('admin.pet-categories.index', [
            'categories' => PetCategory::all()
        ]);
    }

    public function store(Request $request)
    {
        $params = $request->all();

        PetCategory::create($params);

        return redirect()->route('pet-categories.index');
    }

    public function update(Request $request, $category)
    {
        $category = PetCategory::find($category);

        $category->update($request->all());

        return redirect()->route('pet-categories.index');
    }

    public function destroy($category)
    {
        $category = PetCategory::find($category);

        $category->delete();

        return redirect()->route('pet-categories.index');
    }
}
