<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Raport;
use App\Models\Mentor;
use App\Models\TingkatPendidikan;
use App\Models\Program;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class NilaiBulananController extends Controller
{
    public function nilaiBulanan(Request $request)
    {
        $query = Siswa::whereHas('raport', function ($q) use ($request) {
            $q->where('jenis_nilai', 'Bulanan');

            // Filter bulan
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
                    $q->where('jenis_nilai', 'Bulanan');

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

        // Gunakan pagination dan pertahankan query string
        $dataSiswa = $query->orderBy('nama')->paginate(10)->appends($request->query());

        // Untuk dropdown filter
        $mapelList = Mapel::orderBy('nama')->get();
        $tingkatPendidikanList = TingkatPendidikan::orderBy('nama')->get();
        $programList = Program::orderBy('nama_program')->get();
        $tahunAjarList = Raport::where('jenis_nilai', 'Bulanan')
            ->select('tahun_ajar')
            ->distinct()
            ->pluck('tahun_ajar');

        return view('partials.admin.nilai-bulanan', compact(
            'dataSiswa',
            'mapelList',
            'tingkatPendidikanList',
            'programList',
            'tahunAjarList'
        ));
    }

    public function cetakNilaiBulanan(Request $request)
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
                $q->where('jenis_nilai', 'Bulanan');
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
                $q->where('jenis_nilai', 'Bulanan');
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
                ->where('jenis_nilai', 'Bulanan')
                ->when($bulan, fn($q) => $q->where('tanggal_penilaian', 'like', "$tahunAjar-$bulan%"))
                ->groupBy('group_id');
        }

        $pdf = Pdf::loadView('pdf.nilai-bulanan', compact('dataSiswa', 'mapelList'))
            ->setPaper('A4', 'landscape');

        return $pdf->stream('nilai-bulanan.pdf');
    }


    public function formNilaiBln(Request $request)
    {
        try {
            $dataSiswa = Siswa::get();
            $dataMentor = Mentor::select('id', 'nama')->get();
            $nilai = null;
            $groupId = $request->group_id;
            $mapelBerdasarkanTingkat = [];

            if ($groupId) {
                // Ambil semua nilai berdasarkan group_id
                $nilai = Raport::where('group_id', $groupId)->get();

                if ($nilai->isEmpty()) {
                    return redirect()->back()->with('error', 'Data nilai tidak ditemukan.');
                }

                $siswa = $nilai->first()->siswa;
                $idTingkat = $siswa->id_tingkat_pendidikan;

                // Ambil mapel berdasarkan tingkat pendidikan
                $mapelBerdasarkanTingkat = Mapel::whereHas('tingkatPendidikan', function ($q) use ($idTingkat) {
                    $q->where('tingkat_pendidikan.id', $idTingkat);
                })->get();
            }

            return view('partials.admin.form-nilai-bulanan', compact(
                'dataSiswa',
                'dataMentor',
                'nilai',
                'mapelBerdasarkanTingkat',
                'groupId'
            ));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }



    public function getMapelByTingkat($idTingkat)
    {
        $mapel = Mapel::whereHas('tingkatPendidikan', function ($query) use ($idTingkat) {
            $query->where('tingkat_pendidikan.id', $idTingkat);
        })->get(['id', 'nama']);

        return response()->json($mapel);
    }


    public function storeNilai(Request $request)
    {
        $groupId = Str::uuid(); // Buat unique group_id

        // Validasi input
        $validatedData = $request->validate([
            'id_mentor' => 'required|exists:mentor,id',
            'id_siswa' => 'required|exists:siswa,id',
            'semester' => 'required|in:Ganjil,Genap',
            'tahun_ajar' => 'required|string|max:20',
            'tanggal_penilaian' => 'required|date_format:Y-m',
            'jenis_nilai' => 'required|in:Bulanan,Semester',
            'saran' => 'nullable|string|max:255',
            'mapel_id' => 'required|array',
            'mapel_id.*' => 'required|exists:mapel,id',
            'nilai' => 'required|array',
            'nilai.*' => 'required|numeric|min:0|max:100',
        ]);

        $tanggal = Carbon::createFromFormat('Y-m', $request->tanggal_penilaian)->startOfMonth();

        // Loop simpan nilai tiap mapel
        foreach ($validatedData['mapel_id'] as $index => $id_mapel) {
            Raport::create([
                'id_siswa' => $validatedData['id_siswa'],
                'id_mapel' => $id_mapel,
                'nilai' => $validatedData['nilai'][$index],
                'semester' => $validatedData['semester'],
                'tahun_ajar' => $validatedData['tahun_ajar'],
                'tanggal_penilaian' => $tanggal,
                'jenis_nilai' => $validatedData['jenis_nilai'],
                'saran' => $validatedData['saran'],
                'id_mentor' => $validatedData['id_mentor'],
                'group_id' => $groupId,
            ]);
        }

        return redirect()->route('nilai-bulanan')->with('success', 'Nilai siswa berhasil disimpan.');
    }

    public function updateNilai(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nilai' => 'required|array',
            'nilai.*' => 'required|numeric|min:0|max:100',
            'mapel_id' => 'required|array',
            'mapel_id.*' => 'required|exists:mapel,id',
            'semester' => 'required',
            'tahun_ajar' => 'required',
            'tanggal_penilaian' => 'required|date',
            'jenis_nilai' => 'required|in:Bulanan,Semester',
            'saran' => 'nullable|string',
            'id_siswa' => 'required|exists:siswa,id',
            'id_mentor' => 'required|exists:mentor,id',
        ]);

        // Gunakan DB transaction agar jika gagal, semua rollback
        \DB::transaction(function () use ($validatedData, $id) {
            // Hapus data nilai lama yang satu group_id
            Raport::where('group_id', $id)->delete();

            // Simpan ulang data nilai baru
            foreach ($validatedData['mapel_id'] as $i => $id_mapel) {
                Raport::create([
                    'id_siswa' => $validatedData['id_siswa'],
                    'id_mapel' => $id_mapel,
                    'nilai' => $validatedData['nilai'][$i],
                    'semester' => $validatedData['semester'],
                    'tahun_ajar' => $validatedData['tahun_ajar'],
                    'tanggal_penilaian' => \Carbon\Carbon::createFromFormat('Y-m', $validatedData['tanggal_penilaian'])->startOfMonth()->toDateString(),
                    'jenis_nilai' => $validatedData['jenis_nilai'],
                    'saran' => $validatedData['saran'],
                    'id_mentor' => $validatedData['id_mentor'],
                    'group_id' => $id
                ]);
            }
        });

        return redirect()->back()->with('success', 'Nilai berhasil diperbarui.');
    }


    public function deleteNilai($id)
    {
        Raport::where('group_id', $id)->delete();
        return redirect()->back()->with('success', 'Nilai berhasil dihapus.');
    }

}
