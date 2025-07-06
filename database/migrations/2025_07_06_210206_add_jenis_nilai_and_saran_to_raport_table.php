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
        Schema::table('raport', function (Blueprint $table) {
            $table->enum('jenis_nilai', ['Bulanan', 'Semester'])->default('Bulanan')->after('nilai');
            $table->text('saran')->nullable()->after('jenis_nilai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('raport', function (Blueprint $table) {
            $table->dropColumn('jenis_nilai');
            $table->dropColumn('saran');
        });
    }
};
