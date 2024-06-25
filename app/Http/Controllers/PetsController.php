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

    public function updateImages(Request $request, $pet)
    {
        $pet = Pet::find($pet);
        
        if ($request->image2) {
            $fileName = time() . $request->image2->getClientOriginalName();
            $file = $request->file('image2');
            $file->move(public_path('pets'), $fileName);
            $pet->update(['image2' => $fileName]);
        }

        if ($request->image3) {
            $fileName = time() . $request->image3->getClientOriginalName();
            $file = $request->file('image3');
            $file->move(public_path('pets'), $fileName);
            $pet->update(['image3' => $fileName]);
        }

        if ($request->image4) {
            $fileName = time() . $request->image4->getClientOriginalName();
            $file = $request->file('image4');
            $file->move(public_path('pets'), $fileName);
            $pet->update(['image4' => $fileName]);
        }
        
        return redirect()->route('pets.index');
    }

    public function destroy($pet)
    {
        $pet = Pet::find($pet);

        $pet->delete();

        return redirect()->route('pets.index');
    }
}
