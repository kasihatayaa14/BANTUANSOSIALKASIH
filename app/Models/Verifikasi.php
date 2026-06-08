<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Verifikasi extends Model
{
    use HasFactory;

    protected $table = 'verifikasis';

    protected $fillable = [
        'pengajuan_id',
        'status',
        'catatan',
        'tanggal_verifikasi',
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}