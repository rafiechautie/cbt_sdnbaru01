<?php

namespace Database\Seeders;

use App\Models\JadwalUjian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JadwalUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalUjian::create([
            'mapel_id' => 1, 
            'kelas' => '6A',
            'tanggal' => '2025-01-10',
            'waktu_mulai' => '08:00:00',
            'waktu_selesai' => '09:30:00',
            'token' => strtoupper(Str::random(6)), 
            'status' => 'aktif',
        ]);

        JadwalUjian::create([
            'mapel_id' => 1,
            'kelas' => '6B',
            'tanggal' => '2025-01-10',
            'waktu_mulai' => '10:00:00',
            'waktu_selesai' => '11:30:00',
            'token' => strtoupper(Str::random(6)),
            'status' => 'nonaktif',
        ]);

        JadwalUjian::create([
            'mapel_id' => 2, 
            'kelas' => '5A',
            'tanggal' => '2025-01-11',
            'waktu_mulai' => '08:00:00',
            'waktu_selesai' => '09:00:00',
            'token' => strtoupper(Str::random(6)),
            'status' => 'aktif',
        ]);
    }
}

