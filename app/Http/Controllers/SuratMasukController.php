<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = [
            [
                'id'          => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal'     => '08-10-2026',
                'pengirim'    => 'Fakultas Teknik',
                'perihal'     => 'Undangan Rapat'
            ],
            [
                'id'          => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal'     => '09-10-2026',
                'pengirim'    => 'Rektorat',
                'perihal'     => 'Pengumuman Libur'
            ],
            [
                'id'          => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal'     => '10-10-2026',
                'pengirim'    => 'Fakultas Teknik',
                'perihal'     => 'KRS'
            ]
        ];

        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function show($id)
    {
        // Daftar data yang sama (atau nanti bisa menggunakan Database)
        $suratMasuk = [
            1 => [
                'id'          => 1,
                'nomor_surat' => '001/FT/x/2026',
                'tanggal'     => '08-10-2026',
                'pengirim'    => 'Fakultas Kodekteran',
                'perihal'     => 'Undangan Rapat'
            ],
            2 => [
                'id'          => 2,
                'nomor_surat' => '002/FT/x/2026',
                'tanggal'     => '09-10-2026',
                'pengirim'    => 'Rektorat',
                'perihal'     => 'Pengumuman Libur'
            ],
            3 => [
                'id'          => 3,
                'nomor_surat' => '003/FT/x/2026',
                'tanggal'     => '10-10-2026',
                'pengirim'    => 'FAKULTAS TEKNIK',
                'perihal'     => 'KRS'
            ]
        ];

        // Cari data berdasarkan ID, jika tidak ketemu tampilkan error 404
        $surat = $suratMasuk[$id] ?? abort(404);

        // Kirim data ke view show.blade.php
        return view('surat-masuk.show', compact('surat'));
    }
}