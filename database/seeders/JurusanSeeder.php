<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = [
        //     'Ilmu Komputer',
        //     'Teknik Informatika',
        //     'Sistem Informasi',
        //     'Kedokteran',
        // ];

        $data = [
            ['nama_jurusan' => 'Ilmu Komputer', 'fakultas_id' => 1],
            ['nama_jurusan' => 'Sistem Informasi', 'fakultas_id' => 1],
            ['nama_jurusan' => 'Teknik Informatika', 'fakultas_id' => 2],
            ['nama_jurusan' => 'Kedokteran', 'fakultas_id' => 4],
        ];

        // $fakultasId = [
        //     '1', 
        //     '2', 
        //     '1',
        //     '4',
        // ];
        // $data = [
        //     ['Ilmu Komputer', 'FMIPA'],
        //     ['Teknik Informatika', 'FT'],
        //     ['Sistem Informasi', 'FMIPA'],
        //     ['Kedokteran', 'FK'],
        // ]

        foreach ($data as $jurusanData) {
            // Assuming $jurusanData is an associative array with 'nama_jurusan' and 'fakultas_id'
            Jurusan::create([
                'nama_jurusan' => $jurusanData['nama_jurusan'],
                'fakultas_id' => $jurusanData['fakultas_id'],
            ]);
        }
    }
}
