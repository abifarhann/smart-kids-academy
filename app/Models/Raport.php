<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    protected $table = 'raport';

    protected $fillable = [
        'id_siswa',
        'id_mapel',
        'nilai',
        'semester',
        'tahun_ajar',
        'tanggal_penilaian',
        'jenis_nilai',
        'saran',
        'id_mentor',
        'group_id',
    ];

    // Relasi ke Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    // Relasi ke Mentor
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id_mentor');
    }

    // Relasi ke Mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
