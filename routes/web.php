<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/{code}', [ProductController::class, 'show'])->name('product.show');

Route::get('/category/{code}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/category/{code}/filter', [CategoryController::class, 'filter'])->name('category.filter');
