@extends('layouts.app')

@section('title', 'Dashboard - Aplikasi Surat Masuk')

@section('content')
<div class="rounded-xl border border-gray-200 bg-white p-8 shadow-sm md:p-12">
    <h1 class="text-3xl font-bold text-blue-600 md:text-5xl">Selamat Datang di Dashboard!</h1>
    <p class="mt-3 text-lg text-gray-600">Sistem Informasi Pengelolaan Surat Masuk Fakultas.</p>

    <hr class="my-6 border-gray-200">

    <p class="text-gray-700">Silakan akses menu di bawah ini atau melalui navigasi atas untuk melihat data surat masuk.</p>

    <a href="{{ route('surat-masuk.index') }}"
       class="mt-5 inline-block rounded-lg bg-blue-600 px-6 py-3 text-lg font-medium text-white hover:bg-blue-700">
        Kelola Surat Masuk
    </a>
</div>

<!-- Ringkasan Data / Statistik Singkat -->
<div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-3">
    <div class="overflow-hidden rounded-xl bg-green-600 text-white shadow-sm">
        <div class="border-b border-green-500 px-5 py-3 text-sm font-medium">Total Surat Masuk</div>
        <div class="px-5 py-4">
            <h3 class="text-3xl font-bold">3 Surat</h3>
            <p class="mt-1 text-sm text-green-100">Jumlah surat yang telah tercatat di sistem.</p>
        </div>
    </div>
</div>
@endsection