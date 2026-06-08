@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Pengambilan Bantuan</h2>

    <a href="{{ route('petugas.pengambilan.create') }}"
       class="btn btn-primary mb-3">
        Tambah Pengambilan
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Warga</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pengambilan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection