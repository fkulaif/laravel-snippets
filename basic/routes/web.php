<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
}); //-> middleware('age');

Route::get('/products', function () {
     return view('products');
}) -> name('prod');

// Route::get('/products', [ProductsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']) -> name('contact');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
