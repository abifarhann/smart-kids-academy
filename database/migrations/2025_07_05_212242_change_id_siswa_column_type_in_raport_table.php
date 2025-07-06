<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('raport', function (Blueprint $table) {
            DB::statement('ALTER TABLE raport ALTER COLUMN id_siswa TYPE INTEGER USING id_siswa::integer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('raport', function (Blueprint $table) {
            DB::statement('ALTER TABLE raport ALTER COLUMN id_siswa TYPE VARCHAR');
        });
    }
};
