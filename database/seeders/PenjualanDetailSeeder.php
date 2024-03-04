<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 41,
                'penjualan_id' => 31,
                'barang_id' => 11,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 42,
                'penjualan_id' => 31,
                'barang_id' => 13,
                'harga' => 7000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 43,
                'penjualan_id' => 31,
                'barang_id' => 16,
                'harga' => 65000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 44,
                'penjualan_id' => 32,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 45,
                'penjualan_id' => 32,
                'barang_id' => 17,
                'harga' => 12000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 46,
                'penjualan_id' => 32,
                'barang_id' => 20,
                'harga' => 50000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 47,
                'penjualan_id' => 33,
                'barang_id' => 16,
                'harga' => 65000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 48,
                'penjualan_id' => 33,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 49,
                'penjualan_id' => 33,
                'barang_id' => 19,
                'harga' => 30000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 50,
                'penjualan_id' => 34,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 51,
                'penjualan_id' => 34,
                'barang_id' => 11,
                'harga' => 15000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 52,
                'penjualan_id' => 34,
                'barang_id' => 13,
                'harga' => 7000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 53,
                'penjualan_id' => 35,
                'barang_id' => 16,
                'harga' => 65000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 54,
                'penjualan_id' => 35,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 55,
                'penjualan_id' => 35,
                'barang_id' => 17,
                'harga' => 12000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 56,
                'penjualan_id' => 36,
                'barang_id' => 20,
                'harga' => 50000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 57,
                'penjualan_id' => 36,
                'barang_id' => 16,
                'harga' => 65000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 58,
                'penjualan_id' => 36,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 59,
                'penjualan_id' => 37,
                'barang_id' => 19,
                'harga' => 30000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 60,
                'penjualan_id' => 37,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 61,
                'penjualan_id' => 37,
                'barang_id' => 18,
                'harga' => 4000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 62,
                'penjualan_id' => 38,
                'barang_id' => 15,
                'harga' => 40000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 63,
                'penjualan_id' => 38,
                'barang_id' => 19,
                'harga' => 30000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 64,
                'penjualan_id' => 38,
                'barang_id' => 14,
                'harga' => 6000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 65,
                'penjualan_id' => 39,
                'barang_id' => 19,
                'harga' => 30000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 66,
                'penjualan_id' => 39,
                'barang_id' => 12,
                'harga' => 8000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 67,
                'penjualan_id' => 39,
                'barang_id' => 18,
                'harga' => 4000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 68,
                'penjualan_id' => 40,
                'barang_id' => 15,
                'harga' => 40000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 69,
                'penjualan_id' => 40,
                'barang_id' => 19,
                'harga' => 30000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 70,
                'penjualan_id' => 40,
                'barang_id' => 14,
                'harga' => 6000,
                'jumlah' => 3,
            ],

        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
