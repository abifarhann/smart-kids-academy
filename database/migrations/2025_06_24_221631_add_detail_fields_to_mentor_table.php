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
        Schema::table('mentor', function (Blueprint $table) {
            $table->date('tgl_lahir')->nullable()->after('nama'); // sesuaikan dengan posisi field yang kamu inginkan
            $table->string('tempat_lahir')->nullable()->after('tgl_lahir');
            $table->string('phone')->nullable()->after('tempat_lahir');
            $table->text('alamat')->nullable()->after('phone');
            $table->string('jurusan')->nullable()->after('alamat');
            $table->string('prodi')->nullable()->after('jurusan');
            $table->string('asal_sekolah')->nullable()->after('prodi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentor', function (Blueprint $table) {
            $table->dropColumn([
                'tgl_lahir',
                'tempat_lahir',
                'phone',
                'alamat',
                'jurusan',
                'prodi',
                'asal_sekolah',
            ]);
        });
    }
};
