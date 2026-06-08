<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all(); // ✅ SAMA DENGAN BLADE

        return view('admin.masyarakat.index', compact('masyarakat'));
    }
}