<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Mentor extends Model
{
    // Nama tabel jika tidak mengikuti konvensi jamak
    protected $table = 'mentor';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tingkat_pendidikan',
        'status_pendidikan',
        'id_program',
        'start_date',
        'status',
        'tgl_lahir',
        'tempat_lahir',
        'phone',
        'alamat',
        'jurusan',
        'prodi',
        'asal_sekolah',
    ];

    // (Opsional) Jika kamu ingin meng-cast tipe data secara otomatis
    protected $casts = [
        'tgl_lahir' => 'date',
        'start_date' => 'date',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class, 'id_program');
    }
}
