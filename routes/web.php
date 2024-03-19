<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListBarangController113;
use App\Http\Controllers\ListProduct113;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\kendaraan;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

// routes/web.php
route::get('/user/{id}', function ($id){
    return 'User dengan ID'. $id;
});

// routes/web.php
route::prefix('admin')->group(function (){
    route::get('dashboard', function(){
        return 'Admin Dashboard';
    });

    route::get('/users', function (){
        return 'Admin Users';
    });
});

// route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang', [ListBarangController113::class, 'getData']);
Route::get('/dashboard/{dash}', [DashboardController::class, 'dashboard']);
Route::get('/login', [LoginController::class, 'loginForm']);
Route::get('/kendaraan', [kendaraan::class, 'rental']);
Route::get('/listproduct113', [ListProduct113::class, 'getProduct']);