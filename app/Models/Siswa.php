<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'tgl_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'phone',
        'alamat',
        'kelas',
        'asal_sekolah',
        'tgl_mulai',
        'status',
        'id_program',
        'id_user',
        'id_tingkat_pendidikan'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tgl_lahir' => 'date',
        'tgl_mulai' => 'date',
        'status' => 'boolean'
    ];

    public function wali()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tingkatPendidikan()
    {
        return $this->belongsTo(TingkatPendidikan::class, 'id_tingkat_pendidikan');
    }

    public function raport()
    {
        return $this->hasMany(Raport::class, 'id_siswa');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'id_program');
    }
}
