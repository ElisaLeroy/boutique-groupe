<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use \App\Http\Controllers\BackOfficeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show']);
Route::get('cart', [CartController::class,'index']);

Route::get('/backoffice', [BackOfficeController::class,'index']);
Route::get('/backoffice/create', [BackOfficeController::class,'createPage']);
Route::post('backoffice/create', [BackOfficeController::class,'store']);


Route::delete('backoffice/{id}', [BackOfficeController::class,'delete']);


Route::get('/backoffice/update/{id}', [BackOfficeController::class,'updatePage']);
Route::put('/backoffice/update/{id}', [BackOfficeController::class,'update']);





