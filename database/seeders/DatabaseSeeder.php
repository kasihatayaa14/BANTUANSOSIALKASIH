<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MasyarakatSeeder;
use Database\Seeders\BantuanSeeder;
use Database\Seeders\PengajuanSeeder;
use Database\Seeders\PengambilanSeeder;
use Database\Seeders\EventBantuanSeeder;
use Database\Seeders\LaporanSeeder;
use Database\Seeders\PenyaluranSeeder;
use Database\Seeders\VerifikasiSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            MasyarakatSeeder::class,
            BantuanSeeder::class,
            PengajuanSeeder::class,
            PengambilanSeeder::class,
            EventBantuanSeeder::class,
            LaporanSeeder::class,
            PenyaluranSeeder::class,
            VerifikasiSeeder::class,
        ]);
    }
}