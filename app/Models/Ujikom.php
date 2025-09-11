<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujikom extends Model
{
    protected $fillable = [
        'nama_siswa',
        'nama_sekolah',
        'usia',
        'alamat_rumah',
        'nomor_telepon',
        'luas',
        'volume',
        'bangun_datar',
        'bangun_ruang',
    ];
}
