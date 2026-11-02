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

// Route untuk Surat Keluar
Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');