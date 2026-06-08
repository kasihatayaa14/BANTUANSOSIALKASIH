<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'bantuans';

    protected $fillable = [
        'nama_bantuan',
        'total_dana',
        'dana_tersisa',
        'kuota_penerima',
        'jumlah_sudah_mengambil',
        'status',
        'deskripsi'
    ];
}