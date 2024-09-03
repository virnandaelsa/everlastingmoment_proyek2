<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $primaryKey='id_transaksi';

    public function pengguna()
    {
        return $this->belongsTo(User::class,'id_user','id_user');
    }
    public function katalog()
    {
        return $this->belongsTo(katalog::class,'id_katalog','id_katalog');
    }
    public function dt_transaksi()
    {
        return $this->hasMany(dt_transaksi::class,'id_transaksi','id_transaksi');
    }
    public function review()
    {
        return $this->hasMany(review::class,'id_transaksi','id_transaksi');
    }
}
