<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mapel_tingkat_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mapel')->onDelete('cascade');
            $table->foreignId('id_tingkat_pendidikan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapel_tingkat_pendidikan');
    }
};
