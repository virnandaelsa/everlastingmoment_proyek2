<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_transaksi extends Model
{
    use HasFactory;
    protected $table='dt_transaksi';
    protected $primaryKey='id_dt_transaksi';

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class,'id_transaksi','id_transaksi');
    }
}
