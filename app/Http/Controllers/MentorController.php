<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\Validator;
use App\Models\TingkatPendidikan;

class MentorController extends Controller
{
    public function dataMentor()
    {
        $dataMentor = Mentor::with('tingkatPendidikan:id,nama')->get();

        return view('partials.admin.data-mentor', compact('dataMentor'));
    }

    public function formMentor()
    {
        $mentor = null;
        $tingkatPendidikan = TingkatPendidikan::pluck('nama', 'id');

        // Jika ada parameter ID, kita akan mengedit data mentor yang ada
        if (request()->has('id')) {
            $mentor = Mentor::find(request()->id);
            if (!$mentor) {
                return redirect()->back()->with('error', 'Data mentor tidak ditemukan.');
            }
        }
        return view('partials.admin.form-mentor', compact('mentor', 'tingkatPendidikan'));
    }

    public function storeDataMentor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jurusan' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'id_tingkat_pendidikan' => 'required|exists:tingkat_pendidikan,id',
            'status_pendidikan' => 'required|in:Aktif,Lulus',
            'id_program' => 'required|integer',
            'start_date' => 'nullable|date',
            'status' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Mentor::create($validator->validated());

        return redirect()->route('data-mentor')->with('success', 'Data mentor berhasil disimpan.');
    }

    public function updateDataMentor(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jurusan' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'id_tingkat_pendidikan' => 'required|exists:tingkat_pendidikan,id',
            'status_pendidikan' => 'required|in:Aktif,Lulus',
            'id_program' => 'required|integer',
            'start_date' => 'nullable|date',
            'status' => 'required|in:0,1',
        ]);

        $mentor = Mentor::findOrFail($id);

        try {
            $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jurusan' => 'nullable|string|max:255',
            'prodi' => 'nullable|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'id_tingkat_pendidikan' => 'required|exists:tingkat_pendidikan,id',
            'status_pendidikan' => 'required|in:Aktif,Lulus',
            'id_program' => 'required|integer',
            'start_date' => 'nullable|date',
            'status' => 'required|in:0,1',
            ]);

            if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $mentor->update($validator->validated());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui data mentor: ' . $e->getMessage());
        }

        return redirect()->route('data-mentor')->with('success', 'Data mentor berhasil diperbarui.');
    }


    public function deleteDataMentor($id)
    {
        try {
            $mentor = Mentor::findOrFail($id);
            $mentor->delete();

            return redirect()->route('data-mentor')->with('success', 'Data mentor berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('data-mentor')->with('error', 'Gagal menghapus data mentor: ' . $e->getMessage());
        }
    }
}
