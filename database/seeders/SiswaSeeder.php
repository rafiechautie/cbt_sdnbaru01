<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Siswa Kelas 6',
            'username' => 'siswa001',
            'password' => Hash::make('siswa001'),
            'role' => 'siswa',
        ]);

        Siswa::create([
            'user_id' => $user->id,
            'nis' => '12345',
            'kelas' => '6A',
        ]);
    }
}
