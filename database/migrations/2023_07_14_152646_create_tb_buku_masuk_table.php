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
        Schema::create('tb_buku_masuk', function (Blueprint $table) {
            $table->increments('masuk_id');
            $table->string('masuk_nama');
            $table->string('masuk_jenis');
            $table->string('masuk_jumlah');
            $table->string('masuk_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_buku_masuk');
    }
};
