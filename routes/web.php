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
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPenggunaController;
use App\Http\Controllers\AdminKendaraanController;
use App\Http\Controllers\AdminKonfirmasiController;
use App\Http\Controllers\AdminPromoController;
use App\Http\Controllers\AdminRentalController;
use App\Http\Controllers\AdminRiwayatController;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/cars', [CarsController::class, 'cars'])->name('cars');
Route::get('/motorcycle', [MotorcycleController::class, 'motorcycle'])->name('motorcycle');
Route::get('/aboutus', [AboutusController::class, 'aboutus'])->name('aboutus');
Route::get('/rulesandinfo', [RulesController::class, 'rulesandinfo'])->name('rulesandinfo');
Route::get('/setting', [SettingsController::class, 'setting'])->name('setting');
Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');
Route::get('/rental', [RentalController::class, 'rental'])->name('rental');
Route::get('/status', [StatusController::class, 'status'])->name('status');
Route::get('/admindashboard', [AdminDashboardController::class, 'AdminDashboard'])->name('AdminDashboard');
Route::get('/adminpengguna', [AdminPenggunaController::class, 'AdminPengguna'])->name('AdminPengguna');
Route::get('/adminkonfirmasi', [AdminKonfirmasiController::class, 'AdminKonfirmasi'])->name('AdminKonfirmasi');
Route::get('/adminkendaraan', [AdminKendaraanController::class, 'AdminKendaraan'])->name('AdminKendaraan');
Route::get('/adminpromo', [AdminPromoController::class, 'AdminPromo'])->name('AdminPromo');
Route::get('/adminrental', [AdminRentalController::class, 'AdminRental'])->name('AdminRental');
Route::get('/adminRiwayat', [AdminRiwayatController::class, 'AdminRiwayat'])->name('AdminRiwayat');


Route::get('/statusbelumkonfirmasi', function () {
    return view('statusAwal');
});

Route::get('/statussetelahkonfirmasi', function () {
    return view('statusAkhir');
});

Route::get('/detailcars', function () {
    return view('detailcars');
});