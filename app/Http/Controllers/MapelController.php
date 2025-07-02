<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class MapelController extends Controller
{
    public function dataMapel()
    {
        try {
            $dataWali = User::where('role', 'wali_murid')->get();
            return view('partials.admin.mapel', compact('dataWali'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal mengambil data wali: ' . $e->getMessage());
        }
    }
}
