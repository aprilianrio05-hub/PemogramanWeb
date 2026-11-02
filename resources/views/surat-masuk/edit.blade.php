@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h4 class="mb-0">Edit Surat Masuk</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nomor Surat</label>
                        <input type="text" name="nomor_surat"
                               class="form-control @error('nomor_surat') is-invalid @enderror"
                               value="{{ old('nomor_surat', $surat->nomor_surat) }}">
                        @error('nomor_surat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal"
                               class="form-control @error('tanggal') is-invalid @enderror"
                               value="{{ old('tanggal', $surat->tanggal) }}">
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pengirim</label>
                        <input type="text" name="pengirim"
                               class="form-control @error('pengirim') is-invalid @enderror"
                               value="{{ old('pengirim', $surat->pengirim) }}">
                        @error('pengirim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Perihal</label>
                        <input type="text" name="perihal"
                               class="form-control @error('perihal') is-invalid @enderror"
                               value="{{ old('perihal', $surat->perihal) }}">
                        @error('perihal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea name="keterangan" rows="3"
                                  class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $surat->keterangan) }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection