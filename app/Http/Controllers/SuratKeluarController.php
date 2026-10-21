<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = [
            [
                'id'          => 1,
                'nomor_surat' => 'SK/001/X/2026',
                'tanggal'     => '11-10-2026',
                'tujuan'      => 'Dinas Pendidikan',
                'perihal'     => 'Permohonan Kerjasama'
            ],
            [
                'id'          => 2,
                'nomor_surat' => 'SK/002/X/2026',
                'tanggal'     => '12-10-2026',
                'tujuan'      => 'Universitas Mitra',
                'perihal'     => 'Undangan Seminar Nasional'
            ],
            [
                'id'          => 3,
                'nomor_surat' => 'SK/006X/2026',
                'tanggal'     => '12-10-2026',
                'tujuan'      => 'Universitas Mitra',
                'perihal'     => 'Undangan Seminar Nasional'
            ]
        ];

        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show($id)
    {
        $suratKeluar = [
            1 => [
                'id'          => 1,
                'nomor_surat' => 'SK/001/X/2026',
                'tanggal'     => '11-10-2026',
                'tujuan'      => 'Dinas Pendidikan',
                'perihal'     => 'Permohonan Kerjasama'
            ],
            2 => [
                'id'          => 2,
                'nomor_surat' => 'SK/002/X/2026',
                'tanggal'     => '12-10-2026',
                'tujuan'      => 'Universitas Mitra',
                'perihal'     => 'Undangan Seminar Nasional'
            ],

            3 => [
                'id'          => 3,
                'nomor_surat' => 'SK/006X/2026',
                'tanggal'     => '12-10-2026',
                'tujuan'      => 'Universitas Mitra',
                'perihal'     => 'Permohonan peminjaman'
            ]
        ];

        $surat = $suratKeluar[$id] ?? abort(404);

        return view('surat-keluar.show', compact('surat'));
    }
}