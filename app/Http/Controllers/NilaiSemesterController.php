<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Raport;
use App\Models\Mentor;
use App\Models\TingkatPendidikan;
use App\Models\Program;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function cetakNilaiSemester(Request $request)
    {
        $jenjang = $request->input('jenjang');
        $program = $request->input('program');
        $bulan = $request->input('bulan');
        $semester = $request->input('semester');
        $tahunAjar = $request->input('tahun_ajar');

        // Ambil data mapel untuk kolom dinamis
        $mapelList = Mapel::all();

        $dataSiswa = Siswa::with([
            'raport' => function ($q) use ($bulan, $semester, $tahunAjar) {
                $q->where('jenis_nilai', 'Semester');
                if ($bulan) {
                    $q->whereMonth('tanggal_penilaian', $bulan);
                }
                if ($tahunAjar) {
                    $q->where('tahun_ajar', $tahunAjar);
                }
                if ($semester) {
                    $q->where('semester', $semester);
                }
            },
            'program',
            'tingkatPendidikan'
        ])
            ->when($jenjang, fn($q) => $q->where('id_tingkat_pendidikan', $jenjang))
            ->when($program, fn($q) => $q->where('id_program', $program))
            ->whereHas('raport', function ($q) use ($bulan, $semester, $tahunAjar) {
                $q->where('jenis_nilai', 'Semester');
                if ($bulan)
                    $q->whereMonth('tanggal_penilaian', $bulan);
                if ($tahunAjar)
                    $q->where('tahun_ajar', $tahunAjar);
                if ($semester)
                    $q->where('semester', $semester);
            })
            ->get();

        // Kelompokkan raport tiap siswa berdasarkan group_id
        foreach ($dataSiswa as $siswa) {
            $siswa->groupedRaports = $siswa->raport
                ->where('jenis_nilai', 'Semester')
                ->when($bulan, fn($q) => $q->where('tanggal_penilaian', 'like', "$tahunAjar-$bulan%"))
                ->groupBy('group_id');
        }

        $pdf = Pdf::loadView('pdf.nilai-semester', compact('dataSiswa', 'mapelList'))
            ->setPaper('A4', 'landscape');

        return $pdf->stream('nilai-semester.pdf');
    }

}
