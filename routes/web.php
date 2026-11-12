<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

// Hanya untuk tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');
});

// Hanya untuk pengguna yang sudah login
Route::middleware('auth')->group(function () {

    // Dashboard dan logout
    Route::get('/', fn () => view('layouts.dashboard'))->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // ===== Surat Masuk =====
    // Route pengelolaan: hanya petugas (didaftarkan dulu, lihat catatan di bawah)
    Route::resource('surat-masuk', SuratMasukController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-masuk' => 'id'])
        ->middleware('can:manage-letters');

    // Route baca: semua pengguna yang login
    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);

    // ===== Surat Keluar =====
    Route::resource('surat-keluar', SuratKeluarController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-keluar' => 'id'])
        ->middleware('can:manage-letters');

    Route::resource('surat-keluar', SuratKeluarController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-keluar' => 'id']);
});