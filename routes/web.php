<?php

use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// paramater sederhana
Route::get('/surat-masuk', function () {
    return 'Halaman Surat Masuk';
});

// parameter dengan ID
Route::get('/surat-masuk/{id}', function ($id) {
    return 'Detail Surat Masuk dengan ID: '.$id;
});

// cek named route
// php artisan route:list

Route::get('/surat-masuk', [SuratMasukController::class, 'index']);
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show']);
Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');