<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Imam', 'penjualan_kode' => 'PNJL 1', 'penjualan_tanggal' => '2024-02-10 20:10:00'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Fathur', 'penjualan_kode' => 'PNJL 2', 'penjualan_tanggal' => '2024-02-11 20:10:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Rozaq', 'penjualan_kode' => 'PNJL 3', 'penjualan_tanggal' => '2024-02-12 20:10:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Philip', 'penjualan_kode' => 'PNJL 4', 'penjualan_tanggal' => '2024-02-13 20:10:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Surti', 'penjualan_kode' => 'PNJL 5', 'penjualan_tanggal' => '2024-02-14 20:10:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Hakim', 'penjualan_kode' => 'PNJL 6', 'penjualan_tanggal' => '2024-02-15 20:10:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Mbappe', 'penjualan_kode' => 'PNJL 7', 'penjualan_tanggal' => '2024-02-16 20:10:00'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'TenZ', 'penjualan_kode' => 'PNJL 8', 'penjualan_tanggal' => '2024-02-17 20:10:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'ScreaM', 'penjualan_kode' => 'PNJL 9', 'penjualan_tanggal' => '2024-02-18 20:10:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Demon1', 'penjualan_kode' => 'PNJL 10', 'penjualan_tanggal' => '2024-02-19 20:10:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
