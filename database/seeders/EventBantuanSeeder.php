<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventBantuanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('event_bantuans')->insert([

            [
                'nama_event' => 'Pembagian Sembako',
                'tanggal_event' => now(),
                'lokasi' => 'Takengon',
                'deskripsi' => 'Pembagian sembako gratis',
                'foto' => 'event1.jpg',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_event' => 'Santunan Anak Yatim',
                'tanggal_event' => now(),
                'lokasi' => 'Aceh Tengah',
                'deskripsi' => 'Santunan anak yatim',
                'foto' => 'event2.jpg',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}