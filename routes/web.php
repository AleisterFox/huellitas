<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\AdoptionFormController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\PetCategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetAdoptionFormController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\OrderController;

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware([])->group(function() {
    Route::match(['get','post'], '/', [MainController::class, 'index']);
    Route::match(['get', 'post'], '/perritos', [MainController::class, 'perritos']);
    Route::get('/donaciones', [MainController::class, 'donaciones']);
    Route::get('/adopciones', [MainController::class, 'adopciones']);
    Route::get('/contacto', [MainController::class, 'contacto']);
    Route::get('/producto/{product}', [MainController::class, 'producto']);
    Route::get('/adoptar/{pet}', [MainController::class, 'adoptar']);
    Route::get('/carrito', [MainController::class, 'carrito']);
    Route::get('/informacion', [MainController::class, 'informacion']);
    Route::get('/confirmacion', [MainController::class, 'confirmacion']);
    Route::get('/envio', [MainController::class, 'envio']);
    Route::get('/pago', [MainController::class, 'pago']);

    Route::post('pet-adoption-form', [MainController::class, 'petAdoptionForm'])->name('pet-adoption-form');

    Route::post('add-to-cart', [ShoppingCartController::class, 'addToCart'])->name('add-to-cart');
    Route::post('remove-from-cart', [ShoppingCartController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::post('update-cart', [ShoppingCartController::class, 'updateCart'])->name('update-cart');

    Route::resource('order', OrderController::class);
    Route::get('order-callback/{order}', [OrderController::class, 'callback'])->name('order.callback');
});

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('productos', ProductsController::class);
    Route::get('productos/{product}/categorias', [ProductsController::class, 'editCategory'])->name('productos.categories');
    Route::put('productos/{product}/categorias', [ProductsController::class, 'updateCategory'])->name('productos.categories.update');
    Route::put('productos/{product}/imagenes', [ProductsController::class, 'updateImages'])->name('productos.images');

    Route::resource('pets', PetsController::class);
    Route::put('pets/{product}/imagenes', [PetsController::class, 'updateImages'])->name('pets.images');
    Route::resource('pet-categories', PetCategoriesController::class);

    Route::resource('categorias', CategoriesController::class);

    Route::resource('contacto', ContactFormController::class);
    Route::resource('adopciones', AdoptionFormController::class);
    Route::resource('pet-adoption-form', PetAdoptionFormController::class);
});
