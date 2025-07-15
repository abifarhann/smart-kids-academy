<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\TingkatPendidikan;
use App\Models\Raport;

class MapelController extends Controller
{
    public function dataMapel(Request $request)
    {
        try {
            $query = Mapel::with('tingkatPendidikan');

            // Filter berdasarkan pencarian
            if ($request->filled('search')) {
                $query->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhereHas('tingkatPendidikan', function ($q) use ($request) {
                        $q->where('nama', 'like', '%' . $request->search . '%');
                    });
            }

            // Gunakan pagination
            $dataMapel = $query->orderBy('nama')->paginate(10)->appends($request->query());

            return view('partials.admin.mapel', compact('dataMapel'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengambil data mata pelajaran: ' . $e->getMessage());
        }
    }



    public function formMapel(Request $request)
    {
        try {
            $tingkatPendidikan = TingkatPendidikan::pluck('nama', 'id');
            $mapel = null;

            // Jika ada parameter ID, kita akan mengedit data mapel yang ada
            if ($request->has('id')) {
                $mapel = Mapel::find($request->id);
                if (!$mapel) {
                    return redirect()->back()->with('error', 'Data mapel tidak ditemukan.');
                }
            }

            // Kirim data mapel (null untuk create, atau object mapel untuk update)
            return view('partials.admin.form-mapel', compact('mapel', 'tingkatPendidikan'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function storeDataMapel(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'id_tingkat_pendidikan' => 'required|array', // array dari ID
            'id_tingkat_pendidikan.*' => 'exists:tingkat_pendidikan,id', // validasi setiap ID
        ]);

        // Simpan mapel
        $mapel = Mapel::create([
            'nama' => $validatedData['nama'],
        ]);

        // Simpan relasi ke tabel pivot
        $mapel->tingkatPendidikan()->sync($validatedData['id_tingkat_pendidikan']);

        return redirect()->route('data-mapel')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function updateDataMapel(Request $request, $id)
    {
        $mapel = Mapel::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'id_tingkat_pendidikan' => 'required|array',
            'id_tingkat_pendidikan.*' => 'exists:tingkat_pendidikan,id',
        ]);

        // Update nama mapel
        $mapel->update([
            'nama' => $validatedData['nama'],
        ]);

        // Sync tingkat pendidikan (update pivot table)
        $mapel->tingkatPendidikan()->sync($validatedData['id_tingkat_pendidikan']);

        return redirect()->route('data-mapel')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }


    public function deleteDataMapel($id)
    {
        $mapel = Mapel::findOrFail($id);

        // Hapus semua data raport yang berkaitan dengan mapel ini
        Raport::where('id_mapel', $id)->delete();

        // Hapus relasi pivot dengan tingkat pendidikan
        $mapel->tingkatPendidikan()->detach();

        // Hapus mapel itu sendiri
        $mapel->delete();

        return redirect()->route('data-mapel')->with('success', 'Data mata pelajaran dan data terkait berhasil dihapus.');
    }

}
