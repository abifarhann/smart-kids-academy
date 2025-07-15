<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\Validator;
use App\Models\TingkatPendidikan;
use App\Models\Program;

class MentorController extends Controller
{
    public function dataMentor(Request $request)
    {
        try {
            $query = Mentor::with(['tingkatPendidikan:id,nama', 'program:id,nama_program']);

            // Pencarian berdasarkan nama mentor
            if ($request->filled('search')) {
                $query->where('nama', 'like', '%' . $request->search . '%');
            }

            // Filter berdasarkan tingkat pendidikan
            if ($request->filled('jenjang')) {
                $query->where('id_tingkat_pendidikan', $request->jenjang);
            }

            // Filter berdasarkan program ajar
            if ($request->filled('program')) {
                $query->where('id_program', $request->program);
            }

            // Gunakan pagination dan pertahankan parameter filter
            $dataMentor = $query->orderBy('nama')->paginate(10)->appends($request->query());

            $tingkatPendidikanList = TingkatPendidikan::select('id', 'nama')->get();
            $programList = Program::select('id', 'nama_program')->get();

            return view('partials.admin.data-mentor', compact('dataMentor', 'tingkatPendidikanList', 'programList'));

        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengambil data mentor: ' . $e->getMessage());
        }
    }



    public function formMentor()
    {
        $mentor = null;
        $tingkatPendidikan = TingkatPendidikan::pluck('nama', 'id');
        $programList = Program::pluck('nama_program', 'id');

        if (request()->has('id')) {
            $mentor = Mentor::with('program')->find(request()->id);
            if (!$mentor) {
                return redirect()->back()->with('error', 'Data mentor tidak ditemukan.');
            }
        }

        return view('partials.admin.form-mentor', compact('mentor', 'tingkatPendidikan', 'programList'));
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
            'program_id' => 'required|array',
            'program_id.*' => 'exists:program,id',
            'start_date' => 'nullable|date',
            'status' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data mentor (tanpa program_id karena tidak ada kolom itu di tabel mentor)
        $mentorData = $validator->safe()->except('program_id');
        $mentor = Mentor::create($mentorData);

        // Simpan program_id ke relasi many-to-many
        $mentor->program()->sync($request->program_id);

        return redirect()->route('data-mentor')->with('success', 'Data mentor berhasil disimpan.');
    }

    public function updateDataMentor(Request $request, $id)
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
            'program_id' => 'required|array',
            'program_id.*' => 'exists:program,id',
            'start_date' => 'nullable|date',
            'status' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $mentor = Mentor::findOrFail($id);

        try {
            // Update data mentor tanpa program_id
            $mentor->update($validator->safe()->except('program_id'));

            // Update program relasi many-to-many
            $mentor->program()->sync($request->program_id);

            return redirect()->route('data-mentor')->with('success', 'Data mentor berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui data mentor: ' . $e->getMessage());
        }
    }



    public function deleteDataMentor($id)
    {
        try {
            $mentor = Mentor::findOrFail($id);

            // Hapus relasi program di tabel pivot
            $mentor->program()->detach();

            // Hapus data mentor
            $mentor->delete();

            return redirect()->route('data-mentor')->with('success', 'Data mentor berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data mentor: ' . $e->getMessage());
        }
    }

}
