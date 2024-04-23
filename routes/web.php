<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/rulesandinfo', function () {
    return view('rulesandinfo');
});

Route::get('/statusbelumkonfirmasi', function () {
    return view('statusAwal');
});

Route::get('/statussetelahkonfirmasi', function () {
    return view('statusAkhir');
});

Route::get('/rental', function () {
    return view('rental');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/detailcars', function () {
    return view('detailcars');
});

Route::get('/cars', function () {
    return view('cars');
});

Route::get('/motorcycle', function () {
    return view('motorcycle');
});

