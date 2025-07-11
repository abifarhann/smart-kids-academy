<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // Nama tabel jika tidak mengikuti konvensi jamak
    protected $table = 'program';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'nama_program'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_program');
    }

}
