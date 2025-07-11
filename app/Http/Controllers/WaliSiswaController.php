<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Raport;


class WaliSiswaController extends Controller
{
    public function dataWali()
    {
        try {
            $dataWali = User::where('role', 'wali_murid')->get();
            return view('partials.admin.akun-wali-siswa', compact('dataWali'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengambil data wali: ' . $e->getMessage());
        }
    }

    public function formWali(Request $request)
    {
        try {
            $wali = null;

            if ($request->has('id')) {
                $wali = User::where('id', $request->id)
                    ->where('role', 'wali_murid')
                    ->first();

                if (!$wali) {
                    return redirect()->back()->with('error', 'Data wali murid tidak ditemukan.');
                }
            }

            return view('partials.admin.form-wali-siswa', compact('wali'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function storeDataWali(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:100',
                'username' => 'required|string|max:50|unique:users,username',
                'password' => 'required|string|confirmed|min:6',
                'password_confirmation' => ['required', 'same:password'],
                'phone' => 'nullable|string|max:20',
            ], [
                'password.confirmed' => 'Password dan konfirmasi password tidak cocok.',
                'password_confirmation.same' => 'Password dan konfirmasi password harus sama.',
            ]);

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password,
                'phone' => $request->phone,
                'role' => 'wali_murid',
            ]);

            return redirect()->route('akun-wali-siswa')->with('success', 'Data wali siswa berhasil disimpan.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function updateDataWali(Request $request, $id)
    {
        try {
            $wali = User::findOrFail($id);

            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username,' . $wali->id,
                'phone' => 'required',
                'password' => 'nullable|confirmed',
            ]);

            $wali->name = $request->name;
            $wali->username = $request->username;
            $wali->phone = $request->phone;

            if ($request->filled('password')) {
                $wali->password = $request->password;
            }

            $wali->save();

            return redirect()->route('akun-wali-siswa')->with('success', 'Data wali berhasil diperbarui');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui: ' . $e->getMessage());
        }
    }

    public function destroyWali($id)
    {
        try {
            $wali = User::findOrFail($id);

            if ($wali->role !== 'wali_murid') {
                return redirect()->back()->with('error', 'Data yang dipilih bukan wali murid.');
            }

            // Ambil semua siswa yang dimiliki wali ini
            $siswaList = Siswa::where('id_user', $wali->id)->get();

            foreach ($siswaList as $siswa) {
                // Hapus semua raport siswa ini
                Raport::where('id_siswa', $siswa->id)->delete();

                // Hapus data siswa
                $siswa->delete();
            }

            // Hapus wali
            $wali->delete();

            return redirect()->route('akun-wali-siswa')->with('success', 'Data wali murid dan data terkait berhasil dihapus.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus: ' . $e->getMessage());
        }
    }


    // public function index(Request $request)
    // {
    //     $query = User::query()->where('role', 'wali_murid');

    //     if ($request->filled('keyword')) {
    //         $keyword = $request->keyword;
    //         $query->where(function ($q) use ($keyword) {
    //             $q->where('name', 'like', "%$keyword%")
    //                 ->orWhere('username', 'like', "%$keyword%")
    //                 ->orWhere('email', 'like', "%$keyword%")
    //                 ->orWhere('phone', 'like', "%$keyword%");
    //         });
    //     }

    //     $perPage = $request->input('per_page', 10);

    //     if ($perPage === 'all') {
    //         $dataWali = $query->paginate($query->count())->withQueryString(); // tetap paginate tapi semua
    //     } else {
    //         $dataWali = $query->paginate((int) $perPage)->withQueryString();
    //     }

    //     return view('components.tabel-akun-wali', compact('dataWali'));
    // }

}
