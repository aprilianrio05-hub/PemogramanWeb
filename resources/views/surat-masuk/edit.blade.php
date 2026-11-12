@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
        <div class="bg-amber-400 px-6 py-4">
            <h4 class="text-xl font-semibold text-gray-900">Edit Surat Masuk</h4>
        </div>

        <form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST" class="space-y-5 p-6">
            @csrf
            @method('PUT')

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">Nomor Surat</label>
                <input type="text" name="nomor_surat" value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                       class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                              @error('nomor_surat') border-red-500 @else border-gray-300 @enderror">
                @error('nomor_surat')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal) }}"
                       class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                              @error('tanggal') border-red-500 @else border-gray-300 @enderror">
                @error('tanggal')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">Pengirim</label>
                <input type="text" name="pengirim" value="{{ old('pengirim', $surat->pengirim) }}"
                       class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                              @error('pengirim') border-red-500 @else border-gray-300 @enderror">
                @error('pengirim')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">Perihal</label>
                <input type="text" name="perihal" value="{{ old('perihal', $surat->perihal) }}"
                       class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                              @error('perihal') border-red-500 @else border-gray-300 @enderror">
                @error('perihal')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">Keterangan</label>
                <textarea name="keterangan" rows="3"
                          class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                 @error('keterangan') border-red-500 @else border-gray-300 @enderror">{{ old('keterangan', $surat->keterangan) }}</textarea>
                @error('keterangan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="rounded-lg bg-blue-600 px-5 py-2 font-medium text-white hover:bg-blue-700">Simpan Perubahan</button>
                <a href="{{ route('surat-masuk.index') }}"
                   class="rounded-lg bg-gray-500 px-5 py-2 font-medium text-white hover:bg-gray-600">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection