<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyaluran;

class PenyaluranController extends Controller
{
    public function index()
    {
        $penyaluran = Penyaluran::latest()->get();

        return view('admin.penyaluran.index', compact('penyaluran'));
    }
}