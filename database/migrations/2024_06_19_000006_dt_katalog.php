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
        Schema::create('dt_katalog', function (Blueprint $table) {
            $table->id('id_dt_katalog');
            $table->string('judul_variasi');
            $table->unsignedBigInteger('id_katalog');
            $table->timestamps();

            $table->integer('harga');
            $table->string('gambar')->nullable();

            $table->foreign('id_katalog')->references('id_katalog')->on('katalog');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dt_katalog');
    }
};
