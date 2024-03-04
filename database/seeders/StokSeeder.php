<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 21,
                'barang_id' => 11,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 15,
            ],
            [
                'stok_id' => 22,
                'barang_id' => 12,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 20,
            ],
            [
                'stok_id' => 23,
                'barang_id' => 13,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 24,
                'barang_id' => 14,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 25,
            ],
            [
                'stok_id' => 25,
                'barang_id' => 15,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 26,
                'barang_id' => 16,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 15,
            ],
            [
                'stok_id' => 27,
                'barang_id' => 17,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 20,
            ],
            [
                'stok_id' => 28,
                'barang_id' => 18,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 15,
            ],
            [
                'stok_id' => 29,
                'barang_id' => 19,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 30,
                'barang_id' => 20,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 10:00:00',
                'stok_jumlah' => 20,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
