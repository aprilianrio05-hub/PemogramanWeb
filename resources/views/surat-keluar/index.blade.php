@extends('layouts.app')

@section('title', 'Daftar Surat Keluar')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 text-primary">Daftar Surat Keluar</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th>Perihal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suratKeluar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['nomor_surat'] }}</td>
                            <td>{{ $item['tanggal'] }}</td>
                            <td>{{ $item['tujuan'] }}</td>
                            <td>{{ $item['perihal'] }}</td>
                            <td>
                                <a href="{{ route('surat-keluar.show', $item['id']) }}" class="btn btn-info btn-sm text-white">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection