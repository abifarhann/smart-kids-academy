<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Raport;
use App\Models\Mentor;
use App\Models\TingkatPendidikan;
use App\Models\Program;

class NilaiSemesterController extends Controller
{
    public function nilaiSemester(Request $request)
    {
        $query = Siswa::whereHas('raport', function ($q) use ($request) {
            $q->where('jenis_nilai', 'Semester');

            // Filter bulan (tanggal_penilaian)
            if ($request->filled('bulan')) {
                $q->whereMonth('tanggal_penilaian', $request->bulan);
            }

            // Filter semester
            if ($request->filled('semester')) {
                $q->where('semester', $request->semester);
            }

            // Filter tahun ajar
            if ($request->filled('tahun_ajar')) {
                $q->where('tahun_ajar', $request->tahun_ajar);
            }
        })
            ->with([
                'raport' => function ($q) use ($request) {
                    $q->where('jenis_nilai', 'Semester');

                    if ($request->filled('bulan')) {
                        $q->whereMonth('tanggal_penilaian', $request->bulan);
                    }
                    if ($request->filled('semester')) {
                        $q->where('semester', $request->semester);
                    }
                    if ($request->filled('tahun_ajar')) {
                        $q->where('tahun_ajar', $request->tahun_ajar);
                    }
                },
                'tingkatPendidikan:id,nama',
                'program:id,nama_program'
            ]);

        // Search nama siswa
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        // Filter jenjang
        if ($request->filled('jenjang')) {
            $query->where('id_tingkat_pendidikan', $request->jenjang);
        }

        // Filter program bimbel
        if ($request->filled('program')) {
            $query->where('id_program', $request->program);
        }

        // Pagination + appends untuk jaga query string
        $dataSiswa = $query->orderBy('nama')->paginate(10)->appends($request->query());

        $mapelList = Mapel::orderBy('nama')->get();
        $tingkatPendidikanList = TingkatPendidikan::orderBy('nama')->get();
        $programList = Program::orderBy('nama_program')->get();

        // Ambil distinct tahun ajar dari raport
        $tahunAjarList = Raport::where('jenis_nilai', 'Semester')
            ->select('tahun_ajar')
            ->distinct()
            ->pluck('tahun_ajar');

        return view('partials.admin.nilai-semester', compact(
            'dataSiswa',
            'mapelList',
            'tingkatPendidikanList',
            'programList',
            'tahunAjarList'
        ));
    }

}
