<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Guru Matematika',
            'username' => 'guru123',
            'password' => Hash::make('guru123'),
            'role' => 'guru',
        ]);

        Guru::create([
            'user_id' => $user->id,
            'mapel_id' => 2, 
        ]);
    }
}
