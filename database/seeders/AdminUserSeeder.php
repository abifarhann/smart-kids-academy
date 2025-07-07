<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'adminska'], // kondisi pencarian unik
            [
                'name' => 'Administrator',
                'password' => '20070725smartkids',
                'role' => 'admin',
                'phone' => '082338109400',
            ]
        );
    }
}
