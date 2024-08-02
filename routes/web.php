<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\BackofficeController;


Route::get('/', [HomeController::class, 'index']);

Route::get('product', [ProductController::class, 'index']);
Route::get('products/{page}', [ProductController::class, 'sort']);
Route::get('product/{id}', [ProductController::class, 'show']);


Route::get('cart', [CartController::class,'index']);

Route::get('backoffice', [BackofficeController::class, 'index']);
Route::get('backoffice/{page}', [BackofficeController::class, 'edit']);
Route::post('backoffice/{page}', [BackofficeController::class, 'update']);




