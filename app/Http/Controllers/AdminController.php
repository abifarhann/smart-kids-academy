<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function formAdmin()
    {
        $admin = auth()->user(); // Ambil user yang login

        return view('partials.admin.form-admin', compact('admin'));
    }

    public function updateDataAdmin(Request $request, $id)
    {
        try {
            $admin = User::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users,username,' . $admin->id,
                'password' => 'nullable|confirmed|min:6',
            ]);

            $admin->name = $request->name;
            $admin->username = $request->username;

            if ($request->filled('password')) {
                $admin->password = $request->password;
            }

            $admin->save();

            return redirect()->route('statistik')->with('success', 'Akun admin berhasil diperbarui.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui akun admin: ' . $e->getMessage());
        }
    }

}
