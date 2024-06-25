<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetCategory;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function perritos()
    {
        return view('landing.perritos', [
            'pets' => Pet::all(),
            'categories' => PetCategory::all()
        ]);
    }

    public function donaciones()
    {
        return view('landing.donaciones');
    }

    public function adopciones()
    {
        return view('landing.adopciones');
    }

    public function contacto()
    {
        return view('landing.contacto');
    }

    public function producto()
    {
        return view('landing.producto');
    }

    public function adoptar(Pet $pet)
    {
        return view('landing.adoptar', [
            'pet' => $pet
        ]);
    }

    public function carrito()
    {
        return view('landing.carrito');
    }

    public function informacion()
    {
        return view('landing.informacion');
    }

    public function confirmacion()
    {
        return view('landing.confirmacion');
    }

    public function envio()
    {
        return view('landing.envio');
    }
}
