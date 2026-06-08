<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengambilan;
use Illuminate\Http\Request;

class PengambilanController extends Controller
{
    public function index()
    {
        $pengambilan = Pengambilan::latest()->get();

        return view('petugas.pengambilan.index', compact('pengambilan'));
    }

    public function create()
    {
        return view('petugas.pengambilan.create');
    }

    public function store(Request $request)
    {
        Pengambilan::create([
        'masyarakat_id' => $request->masyarakat_id, // nanti dipilih dari dropdown
        'tanggal_pengambilan' => $request->tanggal,
        'status' => $request->status,
        ]);

        return redirect()
            ->route('petugas.pengambilan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }
}