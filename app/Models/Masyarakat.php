<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakats'; // ✅ FIX INI

    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'pekerjaan',
        'gaji',
        'total_harta',
        'jumlah_kendaraan',
        'status_rumah',
        'status_kelayakan'
    ];
}