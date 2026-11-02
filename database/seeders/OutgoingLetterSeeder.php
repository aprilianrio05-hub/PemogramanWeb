<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('outgoing_letters')->insert([
            [
                'nomor_surat' => '001/ABC/2023',
                'tanggal'     => '2023-01-01',
                'pengirim'    => 'PT Sinovasi Idea',
                'perihal'     => 'Permohonan Informasi',
                'keterangan'  => 'Surat permohonan informasi terkait proyek PKL.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_surat' => '002/DEF/2023',
                'tanggal'     => '2023-02-15',
                'pengirim'    => 'PT Sinovasi Idea',
                'perihal'     => 'Undangan Rapat',
                'keterangan'  => 'Undangan rapat koordinasi tim proyek UI/UX.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_surat' => '003/GHI/2023',
                'tanggal'     => '2023-03-10',
                'pengirim'    => 'PT Sinovasi Idea',
                'perihal'     => 'Laporan Kegiatan',
                'keterangan'  => 'Laporan kegiatan bulanan tim pengembangan produk sayur mayur.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
