<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController095;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/img095', function(){
    return view('img095');
});

Route::get('/listmobil5', [ListMobil5Controller::class, 'tampilkan']);
Route::get('/list_product095', [ProductController095::class, 'tampilkan']);
