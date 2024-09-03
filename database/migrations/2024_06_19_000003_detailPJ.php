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
        Schema::create('detailPJ', function (Blueprint $table) {
            $table->id('id_detailPJ');
            $table->unsignedBigInteger('id_user');
            $table->string('nama_toko');

            $table->string('alamat')->nullable();
            $table->string('kategori')->nullable();
            $table->string('bank')->nullable();
            $table->string('no_rek')->unique()->nullable();
            $table->string('profil_tk')->nullable();
            $table->string('sampul_tk')->nullable();

            $table->timestamps();


            $table->foreign('id_user')->references('id_user')->on('pengguna');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailPJ');
    }
};
