<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapel = [
            ['nama_mapel' => 'Bahasa Indonesia'],
            ['nama_mapel' => 'Matematika'],
            ['nama_mapel' => 'IPA'],
            ['nama_mapel' => 'IPS'],
            ['nama_mapel' => 'PPKN'],
        ];

        MataPelajaran::insert($mapel);

    }
}
