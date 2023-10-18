<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data produk
        $produkData = [
            [
                'produk' => 'Apel Fuji',
                'ukuran' => 12,
                'satuan' => 'Buah',
                'deskripsi' => 'Ini adalah telur ayam.',
                'kategori' => 'Telur',
                'merk' => 'Merk Produk',
                'saran_penyajian' => 'Rebus telurnya',
                'petunjuk_simpan' => 'Simpan di tempat yang kering',
                'harga' => 30000,
                'qty' => 12,
                'foto' => 'nama_foto.jpg',
                'expired' => 10,
                'timeframe' => 'Hari',
            ],
            // Tambahkan data produk lainnya di sini
        ];

        // Loop melalui data produk dan masukkan ke dalam tabel
        foreach ($produkData as $produk) {
            Produk::create($produk);
        }
    }
}

