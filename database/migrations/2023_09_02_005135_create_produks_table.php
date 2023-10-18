<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('produk', 255);
            $table->decimal('ukuran', 12, 2); // Menambahkan skala desimal (2 angka di belakang koma)
            $table->string('satuan', 20);
            $table->text('deskripsi', 4000);
            $table->string('kategori', 40);
            $table->string('merk', 40)->nullable();
            $table->string('saran_penyajian', 225)->nullable();
            $table->string('petunjuk_simpan', 225)->nullable();
            $table->integer('harga'); // Menggunakan tipe data integer
            $table->integer('qty')->nullable(); // Menggunakan tipe data integer
            $table->string('foto', 225)->nullable();
            $table->integer('expired')->nullable(); // Menggunakan tipe data integer
            $table->string('timeframe')->nullable(); // Menggunakan tipe data integer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};






