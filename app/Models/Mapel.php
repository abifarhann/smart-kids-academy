<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{

    protected $table = 'mapel';

    protected $fillable = [
        'nama',
        'id_tingkat_pendidikan',
    ];

    public function tingkatPendidikan()
    {
        return $this->belongsToMany(TingkatPendidikan::class, 'mapel_tingkat_pendidikan', 'id_mapel', 'id_tingkat_pendidikan');
    }
}
