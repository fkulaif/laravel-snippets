<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Models\User; // ORM Eloquent way

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Carbon;

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
})->name('prod');

// Route::get('/products', [ProductsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    /**
     * ORM Eloquent way
     */
    $users = User::all();
    //$users = User::whereDate('created_at', date(format: 'Y-m-d'))->get();


    return view('dashboard', compact('users'));
})->name('dashboard');
/**
 * Query Builder way
 */
    //$users = DB::table('users')->get();
