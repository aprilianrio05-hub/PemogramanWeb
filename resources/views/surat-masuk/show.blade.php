@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
        <div class="flex items-center justify-between bg-blue-600 px-6 py-4">
            <h4 class="text-xl font-semibold text-white">Detail Surat Masuk</h4>
            <a href="{{ route('surat-masuk.index') }}"
               class="rounded-lg bg-white px-3 py-1.5 text-sm font-medium text-blue-700 hover:bg-blue-50">Kembali</a>
        </div>

        <div class="p-6">
            <div class="overflow-hidden rounded-lg border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <th class="w-1/3 bg-gray-50 px-4 py-3 text-left font-semibold">ID</th>
                            <td class="px-4 py-3">{{ $surat->id }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-50 px-4 py-3 text-left font-semibold">Nomor Surat</th>
                            <td class="px-4 py-3">{{ $surat->nomor_surat }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-50 px-4 py-3 text-left font-semibold">Tanggal</th>
                            <td class="px-4 py-3">{{ $surat->tanggal }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-50 px-4 py-3 text-left font-semibold">Pengirim</th>
                            <td class="px-4 py-3">{{ $surat->pengirim }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-50 px-4 py-3 text-left font-semibold">Perihal</th>
                            <td class="px-4 py-3">{{ $surat->perihal }}</td>
                        </tr>
                        <tr>
                            <th class="bg-gray-50 px-4 py-3 text-left font-semibold">Keterangan</th>
                            <td class="px-4 py-3">{{ $surat->keterangan ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            @can('manage-letters')
                <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                   class="mt-4 inline-block rounded bg-amber-400 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-amber-500">Edit</a>
            @endcan
        </div>
    </div>
</div>
@endsection