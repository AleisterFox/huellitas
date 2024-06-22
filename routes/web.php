<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\AdoptionFormController;

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware([])->group(function() {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/perritos', [MainController::class, 'perritos']);
    Route::get('/donaciones', [MainController::class, 'donaciones']);
    Route::get('/adopciones', [MainController::class, 'adopciones']);
    Route::get('/contacto', [MainController::class, 'contacto']);
    Route::get('/producto', [MainController::class, 'producto']);
    Route::get('/adoptar', [MainController::class, 'adoptar']);
    Route::get('/carrito', [MainController::class, 'carrito']);
    Route::get('/informacion', [MainController::class, 'informacion']);
    Route::get('/confirmacion', [MainController::class, 'confirmacion']);
    Route::get('/envio', [MainController::class, 'envio']);
    Route::get('/pago', [MainController::class, 'pago']);
});

Route::prefix('admin')->group(function() {
    Route::resource('productos', ProductsController::class);
    Route::resource('categorias', CategoriesController::class);

    Route::resource('contacto', ContactFormController::class);
    Route::resource('adopciones', AdoptionFormController::class);
});
