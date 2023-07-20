<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn',function(){
    return view('dbconn');
});

Route::post('product', [ProductController::class, 'addData']);
Route::view("product","product");
Route::post('product', [ProductController::class, 'addData']);
Route::post('addcustomer', [CustomerController::class, 'addCustomer']);
Route::view('addcustomer', 'addcustomer');






