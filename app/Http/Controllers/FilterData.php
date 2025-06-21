<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class FilterData extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::query();

        if ($request->filled('jenjang')) {
            $query->where('jenjang', $request->jenjang);
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('kelas')) {
            $query->where('kelas', $request->kelas);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $siswa = $query->paginate(10)->withQueryString(); // tampilkan dengan filter
        return view('siswa.index', compact('siswa'));
    }
}
