<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function dataProgram(Request $request)
    {
        try {
            $query = Program::query();

            // Filter pencarian berdasarkan nama_program
            if ($request->filled('search')) {
                $query->where('nama_program', 'like', '%' . $request->search . '%');
            }

            // Gunakan pagination
            $dataProgram = $query->orderBy('nama_program')->paginate(10)->appends($request->query());

            return view('partials.admin.program', compact('dataProgram'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengambil data program bimbel: ' . $e->getMessage());
        }
    }



    public function formProgram(Request $request)
    {
        try {
            $program = null;

            // Jika ada parameter ID, kita akan mengedit data program yang ada
            if ($request->has('id')) {
                $program = Program::find($request->id);
                if (!$program) {
                    return redirect()->back()->with('error', 'Data program tidak ditemukan.');
                }
            }

            // Kirim data program (null untuk create, atau object program untuk update)
            return view('partials.admin.form-program', compact('program'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function storeDataProgram(Request $request)
    {
        $validatedData = $request->validate([
            'nama_program' => 'required|string|max:255',
        ]);

        // Simpan program
        $program = Program::create([
            'nama_program' => $validatedData['nama_program'],
        ]);
        return redirect()->route('data-program')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    public function updateDataProgram(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $validatedData = $request->validate([
            'nama_program' => 'required|string|max:255',
        ]);

        // Update nama_program program
        $program->update([
            'nama_program' => $validatedData['nama_program'],
        ]);
        return redirect()->route('data-program')->with('success', 'Program bimbel berhasil diperbarui.');
    }


    public function deleteDataProgram($id)
    {
        try {
            $program = Program::findOrFail($id);

            // Hapus relasi program dengan mentor di tabel pivot
            $program->mentor()->detach();

            // Hapus program itu sendiri
            $program->delete();

            return redirect()->route('data-program')->with('success', 'Data program berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus program: ' . $e->getMessage());
        }
    }

}
