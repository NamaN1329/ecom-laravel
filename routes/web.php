<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('products');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::post('/buy/{product}', [ProductController::class, 'buy'])->name('product.buy');
});

require __DIR__.'/auth.php';
