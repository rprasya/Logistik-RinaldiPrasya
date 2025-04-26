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
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('no_barang'); // nomor barang keluar
            $table->string('kode_barang'); // kode barang yang keluar
            $table->integer('quantity'); // jumlah keluar
            $table->string('destination'); // tujuan barang
            $table->date('tanggal_keluar'); // tanggal keluar
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluar');
    }
};
