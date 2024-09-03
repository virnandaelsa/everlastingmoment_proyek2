<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_katalog extends Model
{
    use HasFactory;
    protected $table='dt_katalog';
    protected $primaryKey='id_dt_katalog';

    public function katalog()
    {
        return $this->hasOne(katalog::class,'id_katalog','id_katalog');
    }
}
