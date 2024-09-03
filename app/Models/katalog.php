<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    protected $table='katalog';
    protected $primaryKey='id_katalog';

    public function detailPJ()
    {
        return $this->hasOne(detailPJ::class,'id_detailPJ','id_detailPJ');
    }
    public function transaksi()
    {
        return $this->belongsToMany(transaksi::class,
                                    'katalog', /* dt_katalog diambil semua atau * dan join dengan tabel katalog */
                                    'id_katalog'/* kolom sebelum ngambil ID */,
                                    'id_katalog'/* primary key katalog */,
                                    'id_katalog'/* ngambil ID */,
                                    'id_katalog'/* Foreign Key */);
    }
    public function dt_katalog()
    {
        return $this->belongsToMany(dt_katalog::class,
                                    'katalog', /* dt_katalog diambil semua atau * dan join dengan tabel katalog */
                                    'id_katalog'/* kolom sebelum ngambil ID */,
                                    'id_katalog'/* primary key katalog */,
                                    'id_katalog'/* ngambil ID */,
                                    'id_katalog'/* Foreign Key */);
    }
}
