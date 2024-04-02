<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get("/success", [StripeController::class, 'success'])->name('payment-success');
Route::get("/cancel", [StripeController::class, 'cancel'])->name('cancel');