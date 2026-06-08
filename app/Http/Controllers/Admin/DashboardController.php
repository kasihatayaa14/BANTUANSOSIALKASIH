<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| IMPORT MODEL
|--------------------------------------------------------------------------
*/

use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Bantuan;
use App\Models\EventBantuan;
use App\Models\Pengajuan;
use App\Models\Penyaluran;
use App\Models\Pengambilan;
use App\Models\Laporan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [

            'totalUser'         => User::count(),

            'totalMasyarakat'   => Masyarakat::count(),

            'totalBantuan'      => Bantuan::count(),

            'totalEvent'        => EventBantuan::count(),

            'totalPengajuan'    => Pengajuan::count(),

            'totalPenyaluran'   => Penyaluran::count(),

            'totalPengambilan'  => Pengambilan::count(),

            'totalLaporan'      => Laporan::count(),

            'pengajuanTerbaru'  => Pengajuan::latest()
                                        ->take(5)
                                        ->get()
        ]);
    }
}