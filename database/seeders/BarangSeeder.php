<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'KTKT 10', 'barang_nama' => 'Kitkat 10 pack', 'harga_beli' => 25000, 'harga_jual' => 32500],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'DRTS 240G', 'barang_nama' => 'Doritos Original 240 gram', 'harga_beli' => 13700, 'harga_jual' => 21200],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'MNT 320ML', 'barang_nama' => 'Minute Maid 320 ml', 'harga_beli' => 6300, 'harga_jual' => 8500],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'POCA 1.2L', 'barang_nama' => 'Pocari Sweat 1.2 l', 'harga_beli' => 17800, 'harga_jual' => 26500],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'CHR 24W', 'barang_nama' => 'Charger Adaptor 24W', 'harga_beli' => 31000, 'harga_jual' => 45500],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'VAC 30Y', 'barang_nama' => 'Vacuum Cleaner 30-Y', 'harga_beli' => 120300, 'harga_jual' => 132500],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'SKP MTL', 'barang_nama' => 'Sekop Metal', 'harga_beli' => 125000, 'harga_jual' => 152500],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'PPK ORG', 'barang_nama' => 'Pupuk Organik', 'harga_beli' => 25000, 'harga_jual' => 30500],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'KRBL PINE', 'barang_nama' => 'Karbol Pinus', 'harga_beli' => 15000, 'harga_jual' => 21000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'PEL MDRN', 'barang_nama' => 'Pel Modern', 'harga_beli' => 55000, 'harga_jual' => 72500],
        ];
        DB::table('m_barang')->insert($data);
    }
}
