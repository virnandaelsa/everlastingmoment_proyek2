<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $table = 'katalog';
    protected $fillable = [
        'judul_jasa',
        'deskripsi_jasa',
        'kategori_jasa',
        'alamat',
        'nomor_telepon',
        'gambar_katalog',
        'metode_pembayaran',
        'nomor_rekening',
    ];
}
