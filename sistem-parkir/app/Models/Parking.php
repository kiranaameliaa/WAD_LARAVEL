<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = ['plat_nomor', 'jenis_kendaraan', 'waktu_masuk'];
}
