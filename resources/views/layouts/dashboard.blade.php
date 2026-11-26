@extends('layouts.app')

@section('title', 'Dashboard - SIM-Surat')

@section('content')
<div class="mx-auto max-w-6xl space-y-6">

    <!-- Sambutan -->
    <div class="rounded-xl bg-gradient-to-r from-indigo-600 to-indigo-800 p-6 text-white shadow-sm sm:p-8">
        <p class="text-sm text-indigo-200">Selamat datang kembali,</p>
        <h1 class="mt-1 text-2xl font-bold sm:text-3xl">{{ auth()->user()->name }}</h1>
        <p class="mt-2 max-w-xl text-sm text-indigo-100">
            Sistem Informasi Pengelolaan Surat Fakultas. Gunakan menu di samping untuk membuka data surat masuk dan surat keluar.
        </p>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div class="card flex items-center gap-4 p-5">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                </svg>
            </div>
            <div>
                <p class="text-sm text-slate-500">Total Surat Masuk</p>
                <p class="text-2xl font-bold text-slate-900">{{ \App\Models\IncommingLetter::count() }}</p>
            </div>
        </div>

        <div class="card flex items-center gap-4 p-5">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-sky-50 text-sky-600">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </div>
            <div>
                <p class="text-sm text-slate-500">Total Surat Keluar</p>
                <p class="text-2xl font-bold text-slate-900">{{ \App\Models\OutgoingLetter::count() }}</p>
            </div>
        </div>
    </div>

    <!-- Akses cepat -->
    <div class="card p-6">
        <h2 class="text-base font-semibold text-slate-900">Akses Cepat</h2>
        <div class="mt-4 flex flex-wrap gap-3">
            <a href="{{ route('surat-masuk.index') }}" class="btn btn-primary">
                @can('manage-letters') Kelola Surat Masuk @else Lihat Surat Masuk @endcan
            </a>
            <a href="{{ route('surat-keluar.index') }}" class="btn btn-secondary">
                @can('manage-letters') Kelola Surat Keluar @else Lihat Surat Keluar @endcan
            </a>
        </div>
    </div>
</div>
@endsection