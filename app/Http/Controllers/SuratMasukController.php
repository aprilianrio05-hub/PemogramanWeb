<?php

namespace App\Http\Controllers;

use App\Models\IncommingLetter;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    // Menampilkan daftar surat (terbaru di atas)
    public function index()
    {
        $suratmasuk = IncommingLetter::orderBy('id', 'desc')->get();

        return view('surat-masuk.index', compact('suratmasuk'));
    }

    // Menampilkan form tambah (hanya menampilkan form, belum menyimpan)
    public function create()
    {
        return view('surat-masuk.create');
    }

    // Memproses dan menyimpan data dari form tambah
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal'     => 'required|date',
            'pengirim'    => 'required|string|max:255',
            'perihal'     => 'required|string|max:255',
            'keterangan'  => 'nullable|string',
        ]);

        IncommingLetter::create($validated);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil ditambahkan.');
    }

    // Menampilkan detail satu surat
    public function show($id)
    {
        $surat = IncommingLetter::findOrFail($id);

        return view('surat-masuk.show', compact('surat'));
    }

    // Menampilkan form edit yang sudah berisi data lama
    public function edit($id)
    {
        $surat = IncommingLetter::findOrFail($id);

        return view('surat-masuk.edit', compact('surat'));
    }

    // Memproses dan menyimpan perubahan dari form edit
    public function update(Request $request, $id)
    {
        $surat = IncommingLetter::findOrFail($id);

        $validated = $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal'     => 'required|date',
            'pengirim'    => 'required|string|max:255',
            'perihal'     => 'required|string|max:255',
            'keterangan'  => 'nullable|string',
        ]);

        $surat->update($validated);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil diperbarui.');
    }

    // Menghapus surat
    public function destroy($id)
    {
        $surat = IncommingLetter::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil dihapus.');
    }
}