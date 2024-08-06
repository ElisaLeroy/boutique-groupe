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

Route::get('backoffice', [BackofficeController::class, 'index'])->name('backofficelanding');
Route::post('backoffice', [BackofficeController::class, 'store'])->name('backoffice');

Route::get('backoffice/edit/{id}', [BackofficeController::class, 'edit']);
Route::put('backoffice/edit/{id}', [BackofficeController::class, 'update'])->name('edit');
Route::delete('backoffice/delete/{id}', [BackofficeController::class, 'destroy'])->name('destroy');

Route::get('backoffice/create', [BackofficeController::class, 'create'])->name('create');

Route::get('backoffice/customers', [BackofficeController::class, 'showcustomer'])->name('customers');
Route::post('backoffice/customers', [BackofficeController::class, 'addcustomer'])->name('customers');
Route::post('backoffice/customers/edit/{id}', [BackofficeController::class, 'editcustomer'])->name('customersedit');


