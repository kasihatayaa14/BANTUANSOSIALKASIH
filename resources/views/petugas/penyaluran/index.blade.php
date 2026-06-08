@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Data Penyaluran Bantuan</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Penerima</th>
                <th>Jenis Bantuan</th>
                <th>Tanggal</th>
            </tr>
        </thead>

        <tbody>
            @forelse($penyaluran as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->penerima }}</td>
                    <td>{{ $item->jenis_bantuan }}</td>
                    <td>{{ $item->tanggal }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Belum ada data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection