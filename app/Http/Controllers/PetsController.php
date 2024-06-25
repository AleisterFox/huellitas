<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetCategory;

class PetsController extends Controller
{
    public function index()
    {
        return view('admin.pets.index', [
            'pets' => Pet::all(),
            'breeds' => PetCategory::all()
        ]);
    }

    public function store(Request $request)
    {
        $fileName = time() . $request->image?->getClientOriginalName();

        $params = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('pets'), $fileName);
        }

        $params = $request->all();
        $params['image'] = $fileName;

        Pet::create($params);

        return redirect()->route('pets.index');
    }

    public function update(Request $request, Pet $pet)
    {
        $fileName = time() . $request->image?->getClientOriginalName();

        $params = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('pets'), $fileName);
            $params['image'] = $fileName;
        }

        $pet->update($params);

        return redirect()->route('pets.index');
    }

    public function destroy($pet)
    {
        $pet = Pet::find($pet);

        $pet->delete();

        return redirect()->route('pets.index');
    }
}
