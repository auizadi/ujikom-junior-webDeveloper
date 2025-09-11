<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ujikoms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('nama_sekolah');
            $table->integer('usia');
            $table->string('alamat_rumah');
            $table->string('nomor_telepon');
            $table->string('bangun_datar')->nullable();
            $table->string('bangun_ruang')->nullable();
            $table->float('luas')->nullable();
            $table->float('volume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ujikoms');
    }
};
