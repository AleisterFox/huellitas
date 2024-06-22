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
            'categories' => PetCategory::all()
        ]);
    }
}
