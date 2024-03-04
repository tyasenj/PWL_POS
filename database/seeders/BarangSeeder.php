<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 11,
                'kategori_id' => 001,
                'barang_kode' => 'B011',
                'barang_nama' => 'Roti',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 001,
                'barang_kode' => 'B012',
                'barang_nama' => 'Pop Mie',
                'harga_beli' => 6000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 002,
                'barang_kode' => 'B013',
                'barang_nama' => 'Air Mineral',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 002,
                'barang_kode' => 'B014',
                'barang_nama' => 'Teh',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 003,
                'barang_kode' => 'B015',
                'barang_nama' => 'Lipstik',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
            ],
            [
                'barang_id' => 16,
                'kategori_id' => 003,
                'barang_kode' => 'B016',
                'barang_nama' => 'Bedak',
                'harga_beli' => 40000,
                'harga_jual' => 65000,
            ],
            [
                'barang_id' => 17,
                'kategori_id' => 004,
                'barang_kode' => 'B017',
                'barang_nama' => 'Paracetamol',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 18,
                'kategori_id' => 004,
                'barang_kode' => 'B018',
                'barang_nama' => 'Antangin',
                'harga_beli' => 2000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 19,
                'kategori_id' => 005,
                'barang_kode' => 'B019',
                'barang_nama' => 'Popok',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 20,
                'kategori_id' => 005,
                'barang_kode' => 'B020',
                'barang_nama' => 'Susu Bayi',
                'harga_beli' => 40000,
                'harga_jual' => 50000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
