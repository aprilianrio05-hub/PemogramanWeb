@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Detail Surat Keluar</h4>
                <a href="{{ route('surat-keluar.index') }}" class="btn btn-light btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30%;">ID</th>
                        <td>{{ $surat['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Surat</th>
                        <td>{{ $surat['nomor_surat'] }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $surat['tanggal'] }}</td>
                    </tr>
                    <tr>
                        <th>Tujuan</th>
                        <td>{{ $surat['tujuan'] }}</td>
                    </tr>
                    <tr>
                        <th>Perihal</th>
                        <td>{{ $surat['perihal'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection