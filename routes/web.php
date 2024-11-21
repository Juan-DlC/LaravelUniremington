<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view(('home'));
});

Route::get('/products/pdf', [ProductController::class, 'generarPDF'])->name('products.pdf');
Route::resource('/products', ProductController::class);
Route::resource('/clientes', ClienteController::class);
Route::resource('/alquilers', AlquilerController::class);
