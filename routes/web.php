<?php

use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \resources\views\backoffice;

Route::get('/', [HomeController::class, 'index']);
Route::get('product', [ProductController::class, 'index']);
Route::get('products/{select}', [ProductController::class, 'sortProduct']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('cart', [CartController::class, 'index']);



Route::get('backoffice', [BackofficeController::class, 'index']);
Route::get('backoffice/edit/{id}', [BackofficeController::class, 'edit'])->name('backoffice.edit');
Route::post('backoffice/update/{id}', [BackofficeController::class, 'store'])->name('backoffice.update');

Route::get('backoffice/{id}', [BackOfficeController::class, 'show'])->name('products.show');



