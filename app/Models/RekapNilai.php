<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekapNilai extends Model
{
    protected $table = 'rekap_nilai';

    protected $fillable = [
        'siswa_id',
        'jadwal_ujian_id',
        'total_benar',
        'total_salah',
        'nilai',
        'durasi_mengerjakan',
        'selesai_pada',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(JadwalUjian::class, 'jadwal_ujian_id');
    }
}
