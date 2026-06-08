@extends('layouts.admin')

@section('title','Data Bantuan')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            Data Bantuan Sosial
        </h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">

            <thead class="table-success">

                <tr>
                    <th>No</th>
                    <th>Nama Bantuan</th>
                    <th>Total Dana</th>
                    <th>Dana Tersisa</th>
                    <th>Kuota</th>
                    <th>Sudah Mengambil</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                @forelse($bantuans as $index => $bantuan)

                <tr>

                    <td>{{ $index + 1 }}</td>

                    <td>
                        {{ $bantuan->nama_bantuan }}
                    </td>

                    <td>
                        Rp {{ number_format($bantuan->total_dana,0,',','.') }}
                    </td>

                    <td>
                        Rp {{ number_format($bantuan->dana_tersisa,0,',','.') }}
                    </td>

                    <td>
                        {{ $bantuan->kuota_penerima }}
                    </td>

                    <td>
                        {{ $bantuan->jumlah_sudah_mengambil }}
                    </td>

                    <td>

                        @if($bantuan->status == 'Tersedia')

                            <span class="badge badge-success">
                                Tersedia
                            </span>

                        @else

                            <span class="badge badge-danger">
                                Tidak Tersedia
                            </span>

                        @endif

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="7" class="text-center">
                        Data bantuan belum tersedia
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection