<?php

namespace Database\Seeders;

use App\Models\BankSoal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pilihan Ganda
        BankSoal::create([
            'guru_id' => 1,
            'mapel_id' => 1,
            'tipe_soal' => 'pilgan',
            'soal' => 'Berapa hasil dari 12 + 8?',
            'opsi_a' => '18',
            'opsi_b' => '20',
            'opsi_c' => '22',
            'opsi_d' => '10',
            'opsi_e' => '28',
            'kunci_pilgan' => 'B',
        ]);

        // Isian Teks
        BankSoal::create([
            'guru_id' => 1,
            'mapel_id' => 1,
            'tipe_soal' => 'isian_teks',
            'soal' => 'Sebutkan nama ibu kota Indonesia!',
            'kunci_isian' => 'Jakarta',
        ]);

        // Isian Angka
        BankSoal::create([
            'guru_id' => 1,
            'mapel_id' => 1,
            'tipe_soal' => 'isian_angka',
            'soal' => 'Berapakah hasil 15 × 4?',
            'kunci_isian' => '60',
        ]);
    }
}
