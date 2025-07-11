<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TingkatPendidikan extends Model
{
    use HasFactory;

    protected $table = 'tingkat_pendidikan';

    protected $fillable = [
        'nama',
    ];

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class, 'mapel_tingkat_pendidikan', 'id_tingkat_pendidikan', 'id_mapel');
    }
    
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_tingkat_pendidikan');
    }
}
