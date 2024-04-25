<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\SettingsController;



Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/cars', [CarsController::class, 'cars'])->name('cars');
Route::get('/motorcycle', [MotorcycleController::class, 'motorcycle']);
Route::get('/aboutus', [AboutusController::class, 'aboutus']);
Route::get('/rulesandinfo', [RulesController::class, 'rules']);
Route::get('/setting', [SettingsController::class, 'Settings']);
Route::get('/riwayat', [RiwayatController::class, 'riwayat']);
Route::get('/rental', [RentalController::class, 'rental']);




Route::get('/statusbelumkonfirmasi', function () {
    return view('statusAwal');
});

Route::get('/statussetelahkonfirmasi', function () {
    return view('statusAkhir');
});

Route::get('/detailcars', function () {
    return view('detailcars');
});