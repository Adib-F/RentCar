<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController114;
use App\Http\Controllers\RegisterController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/listbarang114', [ListBarangController114::class, 'getData']);
Route::get('/register114', [RegisterController::class, 'registerform']);

