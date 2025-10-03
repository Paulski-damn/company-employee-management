<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'QXIT Admin',
            'email' => 'qxit@quantumx.com',
            'password' => Hash::make('interview@qxit'),
        ]);
    }
}
