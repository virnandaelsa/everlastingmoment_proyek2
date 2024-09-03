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
        Schema::create('review', function (Blueprint $table) {
            $table->id('id_review');
            // $table->unsignedBigInteger('id_pengguna');
            // $table->unsignedBigInteger('id_katalog');
            $table->unsignedBigInteger('id_transaksi');// if status 2 baru bisa

            $table->integer('kualitas');
            $table->integer('ketepatan');
            $table->integer('pelayanan');
            $table->string('deskripsi_kualitas')->nullable();
            $table->string('deskripsi_ketepatan')->nullable();
            $table->string('deskripsi_pelayanan')->nullable();
            $table->string('ft_review')->nullable();
            $table->timestamps();


            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
