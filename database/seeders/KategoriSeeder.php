<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 001,
                'kategori_kode' => 'K001',
                'kategori_nama' => 'Makanan',
            ],
            [
                'kategori_id' => 002,
                'kategori_kode' => 'K002',
                'kategori_nama' => 'Minuman',
            ],
            [
                'kategori_id' => 003,
                'kategori_kode' => 'K003',
                'kategori_nama' => 'Kecantikan',
            ],
            [
                'kategori_id' => 004,
                'kategori_kode' => 'K004',
                'kategori_nama' => 'Kesehatan',
            ],
            [
                'kategori_id' => 005,
                'kategori_kode' => 'K005',
                'kategori_nama' => 'Baby Kid',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
