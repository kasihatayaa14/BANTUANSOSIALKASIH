<!DOCTYPE html>
<html>
<head>
    <title>Data Penyaluran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Penyaluran</h3>
        <button class="btn btn-primary btn-sm">+ Tambah Penyaluran</button>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>Nama Penerima</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th style="width: 160px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($penyaluran as $i => $p)
                        <tr>
                            <td>{{ $i + 1 }}</td>

                            <td>
                                <strong>{{ $p->nama ?? 'Tidak diketahui' }}</strong>
                            </td>

                            <td>
                                {{ $p->tanggal ?? '-' }}
                            </td>

                            <td>
                                @if($p->status == 'Disetujui')
                                    <span class="badge bg-success">Disetujui</span>
                                @elseif($p->status == 'Pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @elseif($p->status == 'Ditolak')
                                    <span class="badge bg-danger">Ditolak</span>
                                @else
                                    <span class="badge bg-secondary">Unknown</span>
                                @endif
                            </td>

                            <td>
                                <button class="btn btn-sm btn-info">Detail</button>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Belum ada data penyaluran
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>