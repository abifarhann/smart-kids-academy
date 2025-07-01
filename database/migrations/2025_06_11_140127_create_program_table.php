<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');
            $table->timestamps();
        });

        // Isi data default
        DB::table('program')->insert([
            [
                'nama_program' => 'Privat',
                'created_at' => now(),
            ],
            [
                'nama_program' => 'Kelompok',
                'created_at' => now(),
            ],
            [
                'nama_program' => 'Community',
                'created_at' => now(),
            ],
            [
                'nama_program' => 'Umum',
                'created_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
