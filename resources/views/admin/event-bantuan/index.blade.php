@extends('layouts.admin')

@section('title','Event Bantuan')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">Data Event Bantuan</h3>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Event</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                @forelse($events as $index => $event)

                <tr>

                    <td>{{ $index + 1 }}</td>

                    <td>{{ $event->nama_event }}</td>

                    <td>{{ $event->tanggal_event }}</td>

                    <td>{{ $event->lokasi }}</td>

                    <td>{{ $event->deskripsi }}</td>

                    <td>
                        <img src="{{ asset('storage/'.$event->foto) }}"
                             width="60"
                             height="60"
                             style="object-fit:cover;">
                    </td>

                    <td>
                        @if($event->status == 'Aktif')
                            <span class="badge badge-success">Aktif</span>
                        @else
                            <span class="badge badge-secondary">Nonaktif</span>
                        @endif
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="7" class="text-center">
                        Tidak ada data event
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection