<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Raport;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class NilaiBulananController extends Controller
{
    public function nilaiBulanan()
    {
        // Ambil hanya siswa yang memiliki raport dengan jenis_nilai 'Bulanan'
        $dataSiswa = Siswa::whereHas('raport', function ($query) {
                $query->where('jenis_nilai', 'Bulanan');
            })
            ->with([
                'raport' => function ($query) {
                    $query->where('jenis_nilai', 'Bulanan');
                },
                'tingkatPendidikan',
                'program'
            ])
            ->get();

        $mapelList = Mapel::orderBy('nama')->get();
        return view('partials.admin.nilai-bulanan', compact('dataSiswa', 'mapelList'));
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
