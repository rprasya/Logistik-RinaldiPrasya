<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory; // Trait untuk mendukung factory kalau mau generate data dummy

    // Nama table yang digunakan (optional, karena Laravel otomatis pakai 'stok_barangs')
    protected $table = 'stok_barang';

    // Kolom-kolom yang boleh diisi (fillable) saat insert/update
    protected $fillable = [
        'kode_barang',  // kode barang unik
        'stok'          // stok jumlah barang saat ini
    ];

    // Tidak perlu relasi ke model lain di sini, karena stok_barang sifatnya simple
}
