<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [ProductController::class, 'indexOrderedByName']);
Route::get('/product-price', [ProductController::class, 'indexOrderedByPrice']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class,'index']);

Route::get('/backoffice', [BackofficeController::class, 'indexOrderedByName']);

Route::get('/backoffice/create-product',[BackofficeController::class, 'create']);
Route::post('/product', [BackofficeController::class, 'store']);

Route::delete('/backoffice/delete-product/{id}',[BackofficeController::class, 'deleteProduct']);

Route::get('/backoffice/edit-product/{id}', [BackofficeController::class, 'showProductEdition']);
Route::put('/backoffice/edit-product/{id}', [BackofficeController::class, 'editProduct']);



