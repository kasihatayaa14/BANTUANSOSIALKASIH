@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Tambah Pengambilan Bantuan</h2>

    <form action="{{ route('petugas.pengambilan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Warga</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Sudah Diambil">Sudah Diambil</option>
                <option value="Menunggu">Menunggu</option>
            </select>
        </div>

        <button class="btn btn-primary">
            Simpan
        </button>

    </form>

</div>

@endsection