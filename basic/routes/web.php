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


Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);