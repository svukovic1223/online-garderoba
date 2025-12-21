<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

// 3 rute (public ili ne-admin korisnik) za use cases ***
Route::post('/cart/add/{product}', [OrderController::class, 'addToCart']);
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/my-orders', [OrderController::class, 'myOrders']);

