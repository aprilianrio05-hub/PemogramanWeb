@extends('layouts.app')

@section('title', 'Daftar Surat Keluar')

@section('content')
<div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
    <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4">
        <h4 class="text-xl font-semibold text-blue-600">Daftar Surat Keluar</h4>

        @can('manage-letters')
            <a href="{{ route('surat-keluar.create') }}"
               class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                + Tambah Surat
            </a>
        @endcan
    </div>

    <div class="p-6">

        @if (session('success'))
            <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-800 text-left text-white">
                    <tr>
                        <th class="px-4 py-3 font-semibold">No</th>
                        <th class="px-4 py-3 font-semibold">Nomor Surat</th>
                        <th class="px-4 py-3 font-semibold">Tanggal</th>
                        <th class="px-4 py-3 font-semibold">Tujuan</th>
                        <th class="px-4 py-3 font-semibold">Perihal</th>
                        <th class="px-4 py-3 font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse ($suratKeluar as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $item->nomor_surat }}</td>
                            <td class="px-4 py-3">{{ $item->tanggal }}</td>
                            <td class="px-4 py-3">{{ $item->tujuan }}</td>
                            <td class="px-4 py-3">{{ $item->perihal }}</td>
                            <td class="px-4 py-3">
                                <div class="flex flex-wrap items-center gap-2">
                                    <a href="{{ route('surat-keluar.show', $item->id) }}"
                                       class="rounded bg-sky-500 px-3 py-1.5 text-xs font-medium text-white hover:bg-sky-600">Detail</a>

                                    @can('manage-letters')
                                        <a href="{{ route('surat-keluar.edit', $item->id) }}"
                                           class="rounded bg-amber-400 px-3 py-1.5 text-xs font-medium text-gray-900 hover:bg-amber-500">Edit</a>

                                        <form action="{{ route('surat-keluar.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="rounded bg-red-600 px-3 py-1.5 text-xs font-medium text-white hover:bg-red-700"
                                                    onclick="return confirm('Hapus surat ini?')">Hapus</button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-6 text-center text-gray-500">Belum ada data surat keluar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection