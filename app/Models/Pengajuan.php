<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | TABLE NAME
    |--------------------------------------------------------------------------
    */

    protected $table = 'pengajuans';

    /*
    |--------------------------------------------------------------------------
    | MASS ASSIGNMENT
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'kode_pengajuan',
        'masyarakat_id',
        'bantuan_id',
        'tanggal_pengajuan',
        'status',
        'keterangan',
        'alasan_penolakan'

    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI
    |--------------------------------------------------------------------------
    */

    // Pengajuan milik masyarakat
    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    // Pengajuan untuk bantuan tertentu
    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class);
    }

    // Pengajuan bisa punya penyaluran
    public function penyaluran()
    {
        return $this->hasOne(Penyaluran::class);
    }
}