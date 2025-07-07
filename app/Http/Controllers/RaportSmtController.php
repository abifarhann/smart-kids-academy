<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Raport;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class RaportSmtController extends Controller
{
    public function RaportSemester($id, $bulan, $semester)
    {
        $siswa = Siswa::with('wali', 'program')->findOrFail($id);

        $raports = Raport::with('mapel')
        ->where('jenis_nilai', 'Semester')
        ->where('id_siswa', $siswa->id)
        ->where('semester', $semester)
        ->whereMonth('tanggal_penilaian', Carbon::parse($bulan)->month)
        ->get();

        if ($raports->isEmpty()) {
            return back()->with('error', 'Data raport tidak ditemukan untuk bulan ini.');
        }

        $tahunAjar = $raports->first()->tahun_ajar ?? '-';
        $saran = $raports->first()->saran ?? '-';

        // Render PDF ke string
        $pdf = Pdf::loadView('pdf.raport-semester', compact(
            'siswa',
            'raports',
            'semester',
            'tahunAjar',
            'bulan',
            'saran'
        ))->output();

        // Encode ke base64 supaya bisa ditampilkan dalam <iframe>
        $base64Pdf = base64_encode($pdf);

        return view('partials.admin.raport-semester', compact('base64Pdf', 'siswa', 'tahunAjar', 'semester'));
    }
}
