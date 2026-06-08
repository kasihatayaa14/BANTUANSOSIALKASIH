<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bantuan;

class BantuanController extends Controller
{
    /**
     * Menampilkan daftar data bantuan
     */
    public function index()
    {
        $bantuans = Bantuan::latest()->get();

        return view('admin.bantuan.index', compact('bantuans'));
    }
}