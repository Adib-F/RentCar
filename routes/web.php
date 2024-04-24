<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController114;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\list_product114;
use App\Http\Controllers\list114;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatusController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/listbarang114', [ListBarangController114::class, 'getData']);
Route::get('/register114', [RegisterController::class, 'registerform']);

Route::get('/listproduct114', [list_product114::class, 'listproduct114']);
Route::get('/list144', [list114::class, 'list']);
Route::get('/Dashboard', [DashboardController::class, 'Dashboard']);
Route::get('/Status', [StatusController::class, 'Status']);

