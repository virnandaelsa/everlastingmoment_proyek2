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
        //
        Schema::create('katalog', function (Blueprint $table) {
            $table->id('id_katalog');
            $table->unsignedBigInteger('id_detailPJ');
            $table->string('judul');
            // $table->unsignedBigInteger('id_detail_katalog');

            $table->string('deskripsi')->nullable();
            // $table->string('kategori');
            // $table->string('alamat')->nullable();
            // $table->string('no_hp')->unique()->nullable();
            // $table->string('id_detail_produk')->unique()->nullable();
            // $table->string('id_review')->unique()->nullable();
            $table->integer('metode_bayar')->nullable();//1. TF 50%, 2. TF 100%, 3. DST
            // $table->string('no_rek')->unique()->nullable();
            $table->timestamps();


            // $table->foreign('id_detail_katalog')->references('id_detail_katalog')->on('detail_katalog');
            $table->foreign('id_detailPJ')->references('id_detailPJ')->on('detailPJ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('katalog');
    }
};
