<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\Validator;

class MentorController extends Controller
{
    public function dataMentor()
    {
        $dataMentor = Mentor::all();
        return view('partials.admin.data-mentor', compact('dataMentor'));
    }

    public function formMentor()
    {
        $mentor = null;
        // Jika ada parameter ID, kita akan mengedit data mentor yang ada
        if (request()->has('id')) {
            $mentor = Mentor::find(request()->id);
            if (!$mentor) {
                return redirect()->back()->with('error', 'Data mentor tidak ditemukan.');
            }
        }
        return view('partials.admin.form-mentor', compact('mentor'));
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
            'tingkat_pendidikan' => 'required|string|max:50',
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

        Mentor::create([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'asal_sekolah' => $request->asal_sekolah,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'status_pendidikan' => $request->status_pendidikan,
            'id_program' => $request->id_program,
            'start_date' => $request->start_date,
            'status' => $request->status,
        ]);

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
            'tingkat_pendidikan' => 'required|string|max:50',
            'status_pendidikan' => 'required|in:Aktif,Lulus',
            'id_program' => 'required|integer',
            'start_date' => 'nullable|date',
            'status' => 'required|in:0,1',
        ]);

        $mentor = Mentor::findOrFail($id);

        $mentor->update([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'asal_sekolah' => $request->asal_sekolah,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'status_pendidikan' => $request->status_pendidikan,
            'id_program' => $request->id_program,
            'start_date' => $request->start_date,
            'status' => $request->status,
        ]);

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
