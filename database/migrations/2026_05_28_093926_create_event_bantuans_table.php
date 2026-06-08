<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_bantuans', function (Blueprint $table) {
            $table->id();

            $table->string('nama_event');

            $table->date('tanggal_event');

            $table->string('lokasi');

            $table->text('deskripsi');

            $table->string('foto')->nullable();

            $table->enum('status', [
                'Aktif',
                'Selesai'
            ])->default('Aktif');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_bantuans');
    }
};