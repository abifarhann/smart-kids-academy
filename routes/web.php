<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormMentorController;
use App\Http\Controllers\FormNilaiBlnController;
use App\Http\Controllers\FormNilaiSmtController;
use App\Http\Controllers\FormWaliController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\NilaiBulananController;
use App\Http\Controllers\NilaiSemesterController;
use App\Http\Controllers\PenilaianSiswaBlnController;
use App\Http\Controllers\PenilaianSiswaSmtController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RaportBulananController;
use App\Http\Controllers\RaportSmtController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\WaliSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormSiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');
    //Akun Wali
    Route::get('/akun-wali-siswa', [WaliSiswaController::class, 'dataWali'])->name('akun-wali-siswa');
    Route::get('/form-wali-siswa', [WaliSiswaController::class, 'formWali'])->name('form-wali-siswa');
    Route::post('/form-wali-siswa/store', [WaliSiswaController::class, 'storeDataWali'])->name('store-data-wali');
    Route::put('/akun-wali-siswa/update/{id}', [WaliSiswaController::class, 'updateDataWali'])->name('update-data-wali');
    Route::delete('/akun-wali-siswa/{id}', [WaliSiswaController::class, 'destroyWali'])->name('hapus-wali-siswa');
    //Mapel
    Route::get('/data-mapel', [MapelController::class, 'dataMapel'])->name('data-mapel');
    Route::get('/form-mapel', [MapelController::class, 'formMapel'])->name('form-mapel');
    Route::post('/form-mapel/store', [MapelController::class, 'storeDataMapel'])->name('store-data-mapel');
    Route::put('/data-mapel/update/{id}', [MapelController::class, 'updateDataMapel'])->name('update-data-mapel');
    Route::delete('/data-mapel/{id}', [MapelController::class, 'deleteDataMapel'])->name('hapus-data-mapel');
    //Data Siswa
    Route::get('/data-siswa', [SiswaController::class, 'dataSiswa'])->name('data-siswa');
    Route::get('/form-siswa', action: [SiswaController::class, 'formSiswa'])->name('form-siswa');
    Route::post('/form-siswa/store', [SiswaController::class, 'storeDataSiswa'])->name('store-data-siswa');
    Route::put('/data-siswa/update/{id}', [SiswaController::class, 'updateDataSiswa'])->name('update-data-siswa');
    Route::delete('/data-siswa/{id}', [SiswaController::class, 'deleteDataSiswa'])->name('hapus-data-siswa');
    //Data Mentor
    Route::get('/data-mentor', [MentorController::class, 'dataMentor'])->name('data-mentor');
    Route::get('/form-mentor', [MentorController::class, 'formMentor'])->name('form-mentor');
    Route::post('/form-mentor/store', [MentorController::class, 'storeDataMentor'])->name('store-data-mentor');
    Route::put('/data-mentor/update/{id}', [MentorController::class, 'updateDataMentor'])->name('update-data-mentor');
    Route::delete('/data-mentor/{id}', [MentorController::class, 'deleteDataMentor'])->name('hapus-data-mentor');
    //Penilaian
    Route::get('/nilai-bulanan', [NilaiBulananController::class, 'nilaiBulanan'])->name('nilai-bulanan');
    Route::get('/form-nilai-bln', [FormNilaiBlnController::class, 'formNilaiBln'])->name('form-nilai-bln');
    Route::get('/raport-bulanan', [RaportBulananController::class, 'raportBulanan'])->name('raport-bulanan');
    Route::get('/form-nilai-smt', [FormNilaiSmtController::class, 'formNilaiSmt'])->name('form-nilai-smt');
    Route::get('/nilai-semester', [NilaiSemesterController::class, 'nilaiSemester'])->name('nilai-semester');
    Route::get('/nilai-bulanan', [NilaiBulananController::class, 'nilaiBulanan'])->name('nilai-bulanan');
    Route::get('/raport-semester', [RaportSmtController::class, 'RaportSmt'])->name('raport-semester');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/penilaian-bulanan-siswa', [PenilaianSiswaBlnController::class, 'PenilaianSiswaBln'])->name('penilaian-bulanan-siswa');
    Route::get('/penilaian-semester-siswa', [PenilaianSiswaSmtController::class, 'PenilaianSiswaSmt'])->name('penilaian-semester-siswa');
    Route::get('/raport-bulanan', [RaportBulananController::class, 'raportBulanan'])->name('raport-bulanan');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
});

// require __DIR__.'/auth.php';
