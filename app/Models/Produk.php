<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk',
        'ukuran',
        'satuan',
        'deskripsi',
        'kategori',
        'merk',
        'saran_penyajian',
        'petunjuk_simpan',
        'harga',
        'qty',
        'foto',
        'expired',
        'timeframe',
    ];

    protected $casts = [
        'ukuran' => 'decimal:2', // Mengkonversi kolom 'ukuran' menjadi desimal dengan 2 angka di belakang koma
    ];
}

