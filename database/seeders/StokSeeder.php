<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 3, 'stok_tanggal' => '2004-02-13 19:20:03', 'stok_jumlah' => 392],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 3, 'stok_tanggal' => '2004-02-14 19:21:03', 'stok_jumlah' => 92],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2004-02-15 19:22:03', 'stok_jumlah' => 32],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id' => 3, 'stok_tanggal' => '2004-02-16 19:23:03', 'stok_jumlah' => 2],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id' => 2, 'stok_tanggal' => '2004-02-17 19:24:03', 'stok_jumlah' => 39],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => '2004-02-18 19:25:03', 'stok_jumlah' => 9],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id' => 2, 'stok_tanggal' => '2004-02-19 19:26:03', 'stok_jumlah' => 3],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id' => 3, 'stok_tanggal' => '2004-02-20 19:27:03', 'stok_jumlah' => 21],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id' => 3, 'stok_tanggal' => '2004-02-21 19:28:03', 'stok_jumlah' => 2],
            ['stok_id' => 10, 'barang_id' => 10, 'user_id' => 2, 'stok_tanggal' => '2004-02-22 19:29:03', 'stok_jumlah' => 5],
        ];
        DB::table('t_stok')->insert($data);
    }
}
