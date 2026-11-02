@extends('layouts.app')

@section('title', 'Daftar Surat Masuk')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h4 class="mb-0 text-primary">Daftar Surat Masuk</h4>
        <a href="{{ route('surat-masuk.create') }}" class="btn btn-primary btn-sm">+ Tambah Surat</a>
    </div>
    <div class="card-body">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat</th>
                        <th>Tanggal</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($suratmasuk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nomor_surat }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->pengirim }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>
                                <a href="{{ route('surat-masuk.show', $item->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                                <a href="{{ route('surat-masuk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('surat-masuk.destroy', $item->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Hapus surat ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data surat masuk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection