<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table='review';
    protected $primaryKey='id_review';

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class,'id_transaksi','id_transaksi');
    }
}
