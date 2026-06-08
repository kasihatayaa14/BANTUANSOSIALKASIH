@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Masyarakat</h3>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan</th>
                    <th>Aset</th>
                    <th>Tanggungan</th>
                    <th>Status Rumah</th>
                    <th>Kelayakan</th>
                </tr>
            </thead>

            <tbody>
                @forelse($masyarakat as $i => $m)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $m->nik }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->alamat }}</td>
                    <td>{{ $m->pekerjaan }}</td>
                    <td>Rp {{ number_format($m->penghasilan) }}</td>
                    <td>Rp {{ number_format($m->aset) }}</td>
                    <td>{{ $m->tanggungan }}</td>
                    <td>{{ $m->status_rumah }}</td>
                    <td>
                        @if($m->kelayakan == 'Layak')
                            <span class="badge bg-success">Layak</span>
                        @else
                            <span class="badge bg-danger">Tidak Layak</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10" class="text-center">Data tidak tersedia</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>

@endsection