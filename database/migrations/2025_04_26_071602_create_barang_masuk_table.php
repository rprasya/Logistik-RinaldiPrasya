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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id(); // primary key auto increment
        $table->string('no_barang'); // nomor barang masuk
        $table->string('kode_barang'); // kode barang (manual input)
        $table->integer('quantity'); // jumlah masuk
        $table->string('origin'); // asal barang
        $table->date('tanggal_masuk'); // tanggal masuk
        $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk');
    }
};
