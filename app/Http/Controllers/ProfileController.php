<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Siswa;

class ProfileController extends Controller
{
    public function profile(){
        $waliMurid = Auth::user();
        // Ambil data siswa berdasarkan id wali murid
        $dataSiswa = Siswa::where('id_user', $waliMurid->id)->with('program')->get();
        return view('partials.walimurid.profile', compact('waliMurid', 'dataSiswa'));
    }
}
