<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    protected $fillable = [
        'nama',
        'tanggal',
        'status'
    ];
}