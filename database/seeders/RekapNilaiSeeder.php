<?php

namespace Database\Seeders;

use App\Models\RekapNilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekapNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        RekapNilai::create([
            'siswa_id' => 1,              
            'jadwal_ujian_id' => 1,        
            'total_benar' => 18,
            'total_salah' => 2,
            'nilai' => 90,
            'durasi_mengerjakan' => 1200,  
            'selesai_pada' => now(),
        ]);

        RekapNilai::create([
            'siswa_id' => 2,
            'jadwal_ujian_id' => 1,
            'total_benar' => 15,
            'total_salah' => 5,
            'nilai' => 75,
            'durasi_mengerjakan' => 1400,
            'selesai_pada' => now(),
        ]);
    }
}
