@extends('layouts.app')

@section('title', 'Dashboard - Aplikasi Surat Masuk')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron bg-white p-5 rounded shadow-sm border">
            <h1 class="display-5 fw-bold text-primary">Selamat Datang di Dashboard!</h1>
            <p class="lead">Sistem Informasi Pengelolaan Surat Masuk Fakultas.</p>
            <hr class="my-4">
            <p>Silakan akses menu di bawah ini atau melalui navigasi atas untuk melihat data surat masuk.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('surat-masuk.index') }}" role="button">Kelola Surat Masuk</a>
        </div>
    </div>
</div>

<!-- Ringkasan Data / Statistik Singkat -->
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3 shadow-sm">
            <div class="card-header">Total Surat Masuk</div>
            <div class="card-body">
                <h3 class="card-title">3 Surat</h3>
                <p class="card-text">Jumlah surat yang telah tercatat di sistem.</p>
            </div>
        </div>
    </div>
</div>
@endsection