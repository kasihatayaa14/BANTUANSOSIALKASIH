<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Verifikasi;
use App\Models\Pengajuan;

class VerifikasiSeeder extends Seeder
{
    public function run(): void
    {
        Verifikasi::truncate();

        $pengajuans = Pengajuan::all();

        if ($pengajuans->count() < 3) {
            $this->command->error(
                'Data pengajuan belum tersedia. Jalankan PengajuanSeeder terlebih dahulu.'
            );

            return;
        }

        Verifikasi::create([
            'pengajuan_id' => $pengajuans[0]->id,
            'status' => 'Disetujui',
            'catatan' => 'Data masyarakat lengkap',
            'tanggal_verifikasi' => now()->toDateString(),
        ]);

        Verifikasi::create([
            'pengajuan_id' => $pengajuans[1]->id,
            'status' => 'Diproses',
            'catatan' => 'Menunggu pemeriksaan petugas',
            'tanggal_verifikasi' => now()->toDateString(),
        ]);

        Verifikasi::create([
            'pengajuan_id' => $pengajuans[2]->id,
            'status' => 'Ditolak',
            'catatan' => 'Tidak memenuhi syarat bantuan',
            'tanggal_verifikasi' => now()->toDateString(),
        ]);
    }
}