<?php

use App\Http\Controllers\Invoice\InvoiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('/pages.Home.dashboard');
});


Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('stocks', App\Http\Controllers\StockController::class);
Route::resource('product_categories', App\Http\Controllers\ProductCategoryController::class);

Route::resource('invoices', InvoiceController::class);
