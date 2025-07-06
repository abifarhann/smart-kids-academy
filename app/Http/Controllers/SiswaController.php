<?php

namespace App\Http\Controllers;

use App\Models\TingkatPendidikan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function dataSiswa()
    {
        $dataSiswa = Siswa::with([
            'wali:id,name',
            'tingkatPendidikan:id,nama'
        ])->get();

        return view('partials.admin.data-siswa', compact('dataSiswa'));
    }

    public function formSiswa(Request $request)
    {
        try {
            $dataWali = User::where('role', 'wali_murid')->pluck('name', 'id');
            $tingkatPendidikan = TingkatPendidikan::pluck('nama', 'id');
            $siswa = null;

            // Jika ada parameter ID, kita akan mengedit data siswa yang ada
            if ($request->has('id')) {
                $siswa = Siswa::find($request->id);
                if (!$siswa) {
                    return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
                }
            }

            // Kirim data siswa (null untuk create, atau object siswa untuk update)
            return view('partials.admin.form-siswa', compact('dataWali', 'siswa', 'tingkatPendidikan'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function storeDataSiswa(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'tgl_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'phone' => 'required|string|max:15',
                'alamat' => 'required|string|max:255',
                'kelas' => 'required|string|max:50',
                'asal_sekolah' => 'required|string|max:255',
                'tgl_mulai' => 'required|date',
                'id_program' => 'required|integer',
                'id_user' => 'required|exists:users,id',
                'id_tingkat_pendidikan' => 'required|exists:tingkat_pendidikan,id'
            ]);

            // Tambahkan status default 1 (aktif)
            $validatedData['status'] = 1;

            Siswa::create($validatedData);

            return redirect()->route('data-siswa')->with('success', 'Data siswa berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function updateDataSiswa(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'tgl_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'phone' => 'required|string|max:15',
                'alamat' => 'required|string|max:255',
                'kelas' => 'required|string|max:50',
                'asal_sekolah' => 'required|string|max:255',
                'tgl_mulai' => 'required|date',
                'id_program' => 'required|integer',
                'id_user' => 'required|exists:users,id',
                'id_tingkat_pendidikan' => 'required|exists:tingkat_pendidikan,id'
            ]);

            // Tetapkan default status = 1 jika tidak disertakan
            $validatedData['status'] = $request->input('status', 1);

            $siswa = Siswa::findOrFail($id);
            $siswa->update($validatedData);

            return redirect()->route('data-siswa')->with('success', 'Data siswa berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }

    public function deleteDataSiswa($id)
    {
        try {
            $siswa = Siswa::findOrFail($id);
            $siswa->delete();

            return redirect()->route('data-siswa')->with('success', 'Data siswa berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus data: ' . $e->getMessage()]);
        }
    }



}
