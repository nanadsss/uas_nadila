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
        Schema::create('tb_buku_kembali', function (Blueprint $table) {
            $table->increments('kembali_id');
            $table->string('kembali_id_keluar');
            $table->string('kembali_nama');
            $table->string('kembali_jumlah');
            $table->string('kembali_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_buku_kembali');
    }
};
