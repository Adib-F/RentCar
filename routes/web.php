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

// routes/web.php
Route::get('/user/{id}', function ($id){
    return 'User dengan ID'. $id;
});

// routes/web.php
Route::prefix('admin')->group(function (){
    Route::get('dashboard', function(){
        return 'Admin Dashboard';
    });

    Route::get('/users', function (){
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
