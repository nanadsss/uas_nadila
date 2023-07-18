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
        Schema::create('tb_buku_keluar', function (Blueprint $table) {
            $table->increments('keluar_id');
            $table->string('keluar_id_masuk');
            $table->string('keluar_nama');
            $table->string('keluar_jumlah');
            $table->string('keluar_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_buku_keluar');
    }
};
