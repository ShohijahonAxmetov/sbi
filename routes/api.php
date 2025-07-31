<?php

use App\Http\Controllers\{CategoryController, ProductController};
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', CategoryController::class);
Route::get('products/export', [ProductController::class, 'export']);
Route::apiResource('products', ProductController::class);
