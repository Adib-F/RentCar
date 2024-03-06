<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'loginForm']);
Route::get('/', function () {
    return view('login');
});

Route::get('/contact', [HomeController::class, 'contact']);



