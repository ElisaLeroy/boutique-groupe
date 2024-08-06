<?php

use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\CategoryController;
use \resources\views\backoffice;

Route::get('/', [HomeController::class, 'index']);
Route::get('product', [ProductController::class, 'index']);
Route::get('products/{select}', [ProductController::class, 'sortProduct']);
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('cart', [CartController::class, 'index']);
Route::get('categories', [CategoryController::class, 'index']);



Route::get('backoffice', [BackOfficeController::class, 'index']);
Route::get('backoffice/edit/{id}', [BackofficeController::class, 'edit'])->name('backoffice.edit');
Route::put('backoffice/update/{id}', [BackofficeController::class, 'update'])->name('backoffice.update');

Route::get('/backoffice/create', [BackofficeController::class, 'create']);
Route::post('backoffice/product/store', [BackofficeController::class, 'store'])->name('backoffice.store');

Route::delete('backoffice/update/{id}', [BackofficeController::class, 'destroy'])->name('backoffice.destroy');



