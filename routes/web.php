<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormMentorController;
use App\Http\Controllers\FormNilaiBlnController;
use App\Http\Controllers\FormWaliController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\NilaiBulananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RaportBulananController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormSiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/akun-wali-siswa', [WaliSiswaController::class, 'dataWali'])->name('akun-wali-siswa');
    Route::get('/form-wali-siswa', [WaliSiswaController::class, 'formWali'])->name('form-wali-siswa');
    Route::get('/form-wali-siswa/{id}', [WaliSiswaController::class, 'formEditWali'])->name('edit-wali-siswa');
    Route::post('/form-wali-siswa/store', [WaliSiswaController::class, 'storeDataWali'])->name('store-data-wali');
    Route::put('/akun-wali-siswa/update/{id}', [WaliSiswaController::class, 'updateDataWali'])->name('update-data-wali');
    Route::delete('/akun-wali-siswa/{id}', [WaliSiswaController::class, 'destroyWali'])->name('hapus-wali-siswa');
    Route::get('/data-siswa', [SiswaController::class, 'dataSiswa'])->name('data-siswa');
    Route::get('/data-mentor', [MentorController::class, 'dataMentor'])->name('data-mentor');
    Route::get('/nilai-bulanan', [NilaiBulananController::class, 'nilaiBulanan'])->name('nilai-bulanan');
    Route::get('/form-siswa', [FormSiswaController::class, 'formSiswa'])->name('form-siswa');
    Route::get('/form-mentor', [FormMentorController::class, 'formMentor'])->name('form-mentor');
    Route::get('/form-nilai-bln', [FormNilaiBlnController::class, 'formNilaiBln'])->name('form-nilai-bln');
    Route::get('/raport-bulanan', [RaportBulananController::class, 'raportBulanan'])->name('raport-bulanan');
});

// require __DIR__.'/auth.php';
