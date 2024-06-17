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
use App\Http\Controllers\AdminStatusController;
use App\Http\Controllers\AdminPromoController;
use App\Http\Controllers\AdminRentalController;
use App\Http\Controllers\AdminRiwayatController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ResiController;


// route tanpa login
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/cars', [CarsController::class, 'index'])->name('cars');
Route::get('/motorcycle', [MotorcycleController::class, 'index'])->name('motorcycle');
Route::get('/about-us', [AboutusController::class, 'aboutus'])->name('aboutus');
Route::get('/rulesandinfo', [RulesController::class, 'rulesandinfo'])->name('rulesandinfo');
Route::get('/resi', [ResiController::class, 'resi'])->name('resi');


// Route untuk Admin
Route::middleware(['auth'])->group(function () {

    Route::middleware('role:Admin')->group(function(){
        Route::get('/admindashboard', [AdminDashboardController::class, 'index'])->name('AdminDashboard');

        Route::get('/adminpengguna', [AdminPenggunaController::class, 'index'])->name('AdminPengguna');
        Route::post('/addPengguna', [AdminPenggunaController::class, 'addPengguna'])->name('addPengguna');
        Route::patch('/updatePengguna/{id_pengguna}', [AdminPenggunaController::class, 'updatePengguna'])->name('updatePengguna');
        Route::delete('/deletePengguna/{id_pengguna}', [AdminPenggunaController::class, 'deletePengguna'])->name('deletePengguna');

        Route::get('/adminkendaraan', [AdminKendaraanController::class, 'index'])->name('AdminKendaraan');
        Route::post('/addKendaraan', [AdminKendaraanController::class, 'addKendaraan'])->name('addKendaraan');
        Route::put('/updateKendaraan/{id_kendaraan}', [AdminKendaraanController::class, 'updateKendaraan'])->name('updateKendaraan');
        Route::delete('/deleteKendaraan/{id_kendaraan}', [AdminKendaraanController::class, 'deleteKendaraan'])->name('deleteKendaraan');

        Route::get('/adminpromo', [AdminPromoController::class, 'index'])->name('AdminPromo');
        Route::post('/addPromo', [AdminPromoController::class, 'addPromo'])->name('addPromo');
        Route::post('/klaimPromo', [AdminPromoController::class, 'klaimPromo'])->name('klaimPromo');
        Route::put('/updatePromo/{id_promo}', [AdminPromoController::class, 'updatePromo'])->name('updatePromo');
        Route::delete('/deletePromo/{id_promo}', [AdminPromoController::class, 'deletePromo'])->name('deletePromo');

        Route::get('/adminrental', [AdminRentalController::class, 'index'])->name('AdminRental');
        Route::put('/updateRental/{id_rental}', [AdminRentalController::class, 'updateRental'])->name('updateRental');
        Route::delete('/deleteRental/{id_rental}', [AdminRentalController::class, 'deleteRental'])->name('deleteRental');

        Route::get('/adminStatus', [AdminStatusController::class, 'AdminStatus'])->name('AdminStatus');
        Route::get('/adminRiwayat', [AdminRiwayatController::class, 'AdminRiwayat'])->name('AdminRiwayat');
    });
    Route::middleware('role:Pengguna')->group(function(){
        Route::get('/riwayat', [RiwayatController::class, 'riwayat'])->name('riwayat');
        Route::get('/rental', [RentalController::class, 'rental'])->name('rental');
        Route::get('/status', [StatusController::class, 'status'])->name('status');
        Route::get('/setting', [SettingsController::class, 'setting'])->name('setting');
        Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('Notifikasi');
        Route::put('/update_profile/{id_pengguna}', [SettingsController::class, 'update_profile'])->name('update_profile');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Login dan Register hanya bisa diakses oleh pengguna yang belum login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login_proses');

    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register-proses', [RegisterController::class, 'register_proses'])->name('register_proses');
});


// Halaman lainnya yang tidak terdaftar di atas akan memberikan response 404
Route::fallback(function () {
    abort(404);
});
