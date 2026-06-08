<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;
use App\Models\Pengambilan;
use App\Models\Penyaluran;

class DashboardController extends Controller
{
    public function index()
    {
        return view('petugas.dashboard', [
            'total_bantuan' => Bantuan::count(),
            'total_pengambilan' => Pengambilan::count(),
            'total_penyaluran' => Penyaluran::count(),
        ]);
    }
}