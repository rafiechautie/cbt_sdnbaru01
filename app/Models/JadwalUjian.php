<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    protected $table = 'jadwal_ujian';

    protected $fillable = [
        'mapel_id',
        'kelas',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'token',
        'status',
    ];

    public function mapel()
    {
        return $this->belongsTo(MataPelajaran::class, 'mapel_id');
    }
}
