<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tingkat_pendidikan')->insert([
            ['nama' => 'PAUD'],
            ['nama' => 'TK'],
            ['nama' => 'SD'],
            ['nama' => 'SMP'],
            ['nama' => 'SMA/SMK'],
            ['nama' => 'D1'],
            ['nama' => 'D2'],
            ['nama' => 'D3'],
            ['nama' => 'S1'],
            ['nama' => 'S2'],
            ['nama' => 'S3'],
        ]);
    }
}
