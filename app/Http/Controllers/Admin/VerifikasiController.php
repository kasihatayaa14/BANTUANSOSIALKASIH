<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;

class VerifikasiController extends Controller
{
    public function index()
    {
        $verifikasi = Pengajuan::latest()->get();

        return view('admin.verifikasi.index', compact('verifikasi'));
    }
}