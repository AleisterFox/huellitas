<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetCategory;
use App\Models\PetAdoptionForm;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Alliance;
use App\Services\CartService;

class MainController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post') && $request->has('categories')) {
            if ($request->collect('categories')->contains(0)) {
                $products = Product::all();
            } else {
                $products = Product::whereHas('categories', function($query) use ($request) {
                    $query->whereIn('category_id', $request->collect('categories'));
                })->get();
            }

            return $products->map(function($product) {
                return view('landing._product', [
                    'product' => $product
                ])->render();
            })->implode('');
        } else {
            $products = Pet::all();
        }

        return view('index', [
            'alliances' => Alliance::all(),
            'products' => Product::all(),
            'categories' => Category::all(),
            'slides' => Slide::all()
        ]);
    }

    public function perritos(Request $request)
    {
        if ($request->isMethod('post') && $request->has('categories')) {
            $pets = Pet::query();

            if ($request->collect('categories')->contains(0)) {
                $pets = $pets->get();
            } else {
                $pets = $pets->whereIn('breed', $request->collect('categories'))->get();
            }

            if ($request->has('sizes')) {
                $pets = $pets->where('size', $request->collect('sizes')->first());
            }

            return $pets->map(function($pet) {
                return view('landing._perrito', [
                    'pet' => $pet
                ])->render();
            })->implode('');
        } else {
            $pets = Pet::all();
        }
    
        return view('landing.perritos', [
            'pets' => $pets,
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

    public function producto(Product $product)
    {
        return view('landing.producto', [
            'product' => $product
        ]);
    }

    public function adoptar(Pet $pet)
    {
        return view('landing.adoptar', [
            'pet' => $pet
        ]);
    }

    public function carrito(CartService $cartService)
    {
        if (CartService::getCount() === 0) {
            return redirect('/');
        }

        return view('landing.carrito', [
            'products' => $cartService->getProducts()
        ]);
    }

    public function informacion(CartService $cartService)
    {
        if (CartService::getCount() === 0) {
            return redirect('/');
        }
        
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

    public function petAdoptionForm(Request $request)
    {
        PetAdoptionForm::create($request->all());

        return redirect()->back()->with('success', 'Pet adoption form submitted successfully');
    }
}
