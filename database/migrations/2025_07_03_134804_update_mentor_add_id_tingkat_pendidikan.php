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
        Schema::table('mentor', function (Blueprint $table) {
            // Hapus kolom lama
            if (Schema::hasColumn('mentor', 'tingkat_pendidikan')) {
                $table->dropColumn('tingkat_pendidikan');
            }

            // Tambah kolom baru
            $table->string('id_tingkat_pendidikan')->nullable()->after('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentor', function (Blueprint $table) {
            $table->dropColumn('id_tingkat_pendidikan');
            // Tambahkan kembali kolom lama jika rollback
            $table->string('tingkat_pendidikan')->nullable();
        });
    }
};
