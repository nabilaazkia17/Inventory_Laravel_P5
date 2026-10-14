<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
})->name('home');

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class)->except(['show']);

Route::post('/products/{product}/adjust-stock', [ProductController::class, 'adjustStock'])
    ->name('products.adjust-stock');
