<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Raport;
use App\Models\Mentor;

class NilaiSemesterController extends Controller
{
    public function nilaiSemester()
    {
        // Ambil hanya siswa yang memiliki raport dengan jenis_nilai 'Bulanan'
        $dataSiswa = Siswa::whereHas('raport', function ($query) {
            $query->where('jenis_nilai', 'Semester');
        })
            ->with([
                'raport' => function ($query) {
                    $query->where('jenis_nilai', 'Semester');
                },
                'tingkatPendidikan',
                'program'
            ])
            ->get();

        $mapelList = Mapel::orderBy('nama')->get();
        return view('partials.admin.nilai-semester', compact('dataSiswa', 'mapelList'));
    }
}
