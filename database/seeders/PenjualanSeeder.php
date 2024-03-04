<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 31,
                'user_id' => 3,
                'pembeli' => 'Tyase',
                'penjualan_kode' => 'P031',
                'penjualan_tanggal' => '2024-03-04 10:30:00',
            ],
            [
                'penjualan_id' => 32,
                'user_id' => 3,
                'pembeli' => 'Lili',
                'penjualan_kode' => 'P032',
                'penjualan_tanggal' => '2024-03-04 10:32:00',
            ],
            [
                'penjualan_id' => 33,
                'user_id' => 3,
                'pembeli' => 'Momo',
                'penjualan_kode' => 'P033',
                'penjualan_tanggal' => '2024-03-04 10:34:00',
            ],
            [
                'penjualan_id' => 34,
                'user_id' => 3,
                'pembeli' => 'Lulu',
                'penjualan_kode' => 'P034',
                'penjualan_tanggal' => '2024-03-04 10:36:00',
            ],
            [
                'penjualan_id' => 35,
                'user_id' => 3,
                'pembeli' => 'Rara',
                'penjualan_kode' => 'P035',
                'penjualan_tanggal' => '2024-03-04 10:38:00',
            ],
            [
                'penjualan_id' => 36,
                'user_id' => 3,
                'pembeli' => 'Sasa',
                'penjualan_kode' => 'P036',
                'penjualan_tanggal' => '2024-03-04 10:36:00',
            ],
            [
                'penjualan_id' => 37,
                'user_id' => 3,
                'pembeli' => 'Susi',
                'penjualan_kode' => 'P037',
                'penjualan_tanggal' => '2024-03-04 10:37:00',
            ],
            [
                'penjualan_id' => 38,
                'user_id' => 3,
                'pembeli' => 'Roni',
                'penjualan_kode' => 'P038',
                'penjualan_tanggal' => '2024-03-04 10:39:00',
            ],
            [
                'penjualan_id' => 39,
                'user_id' => 3,
                'pembeli' => 'Dodo',
                'penjualan_kode' => 'P039',
                'penjualan_tanggal' => '2024-03-04 10:40:00',
            ],
            [
                'penjualan_id' => 40,
                'user_id' => 3,
                'pembeli' => 'Nono',
                'penjualan_kode' => 'P040',
                'penjualan_tanggal' => '2024-03-04 10:42:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
