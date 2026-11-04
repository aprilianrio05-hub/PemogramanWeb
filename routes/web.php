<?php

use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

// Halaman Utama / Dashboard (menggunakan layouts/dashboard.blade.php)
Route::get('/', function () {
    return view('layouts.dashboard');
})->name('dashboard');

// Route untuk Surat Masuk (CRUD)
Route::resource('surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id']);

// Route untuk Surat Keluar (CRUD)
Route::resource('surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id']);