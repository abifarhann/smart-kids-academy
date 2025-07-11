<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Raport;
use Carbon\Carbon;

class PenilaianSiswaSmtController extends Controller
{
    public function PenilaianSiswaSmt()
    {
        $waliMurid = auth()->user();
        $dataSiswa = Siswa::where('id_user', $waliMurid->id)->with('program')->get();
        return view('partials.walimurid.penilaian-siswa-smt', compact('waliMurid', 'dataSiswa'));
    }

    public function detailNilaiSemester(Request $request)
    {
        $waliMurid = auth()->user();
        $siswa = Siswa::find($request->id);

        if (!$siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
        }

        // Ambil hanya raport dengan jenis_nilai = 'Semester'
        $raports = Raport::with('mapel')
            ->where('jenis_nilai', 'Semester')
            ->where('id_siswa', $siswa->id)
            ->orderBy('tanggal_penilaian')
            ->get();

        if ($raports->isEmpty()) {
            return redirect()->back()->with('error', 'Data raport bulanan tidak atau belum ada untuk siswa ini.');
        }

        // Kelompokkan raport berdasarkan Bulan + Semester
        $groupedRaports = $raports->groupBy(function ($item) {
            return Carbon::parse($item->tanggal_penilaian)->format('F') . '-' . $item->semester;
        });

        // Format ulang jadi array berisi data yang dibutuhkan saja
        $groupedRaportsFormatted = $groupedRaports->map(function ($group, $key) {
            [$bulanFormatted, $semester] = explode('-', $key);
            $tahunAjar = $group->first()?->tahun_ajar ?? '-';
            $idSiswa = $group->first()?->id_siswa ?? null;

            return [
                'bulan' => $bulanFormatted,
                'semester' => $semester,
                'tahun_ajar' => $tahunAjar,
                'id_siswa' => $idSiswa,
            ];
        })->values();

        return view('partials.walimurid.detail-nilai-semester', compact(
            'waliMurid',
            'siswa',
            'raports',
            'groupedRaportsFormatted'
        ));
    }
}
