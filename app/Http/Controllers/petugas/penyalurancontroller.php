<?php
namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Penyaluran;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    public function index()
    {
        $penyaluran = Penyaluran::latest()->get();

        return view('petugas.penyaluran.index', compact('penyaluran'));
    }
}