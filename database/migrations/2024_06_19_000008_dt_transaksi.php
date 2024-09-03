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
        Schema::create('dt_transaksi', function (Blueprint $table) {
            $table->id('id_dt_transaksi');
            $table->unsignedBigInteger('id_transaksi');//untuk kebutuhan user dan katalog

            $table->string('ket');
            $table->string('bukti_tfDP');
            $table->string('bukti_tfPelunasan');
            $table->integer('status_pembayaran')->default('1');//1. Belum Dibayar, 2. DP, 3. Lunas
            $table->timestamps();


            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dt_transaksi');

    }
};
