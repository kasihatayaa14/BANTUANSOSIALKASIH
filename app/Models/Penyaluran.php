<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    protected $fillable = [
        'penerima',
        'jenis_bantuan',
        'tanggal'
    ];
}