@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Verifikasi</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Masyarakat ID</th>
                    <th>Bantuan ID</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse($verifikasi as $i => $v)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $v->masyarakat_id }}</td>
                    <td>{{ $v->bantuan_id }}</td>
                    <td>{{ $v->tanggal }}</td>
                    <td>
                        @if($v->status == 'Disetujui')
                            <span class="badge bg-success">Disetujui</span>
                        @elseif($v->status == 'Pending')
                            <span class="badge bg-warning">Pending</span>
                        @else
                            <span class="badge bg-danger">{{ $v->status }}</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Data kosong</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>

@endsection