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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_user');//nama
            $table->unsignedBigInteger('id_katalog');//katalog

            $table->date('tanggal');
            $table->integer('status')->default('1');//1. Pengajuan, 2. Diterima, 3. Ditolak
            //dt pesanan ga tak cantumin
            $table->timestamps();


            $table->foreign('id_user')->references('id_user')->on('pengguna');
            $table->foreign('id_katalog')->references('id_katalog')->on('katalog');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
