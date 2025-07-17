<?php

use App\Http\Controllers\AuthController;
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
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminController;


// Auth
Route::get('/', [WebController::class, 'index'])->name('web');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::middleware('role:admin')->group(function () {
        // Dashboard
        Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');
        Route::get('/form-admin', [AdminController::class, 'formAdmin'])->name('form-admin');
        Route::put('/akun-admin/update/{id}', [AdminController::class, 'updateDataAdmin'])->name('update-admin');
        //Akun Wali
        Route::get('/akun-wali-siswa', [WaliSiswaController::class, 'dataWali'])->name('akun-wali-siswa');
        Route::get('/form-wali-siswa', [WaliSiswaController::class, 'formWali'])->name('form-wali-siswa');
        Route::get('/cetak-data-wali', [WaliSiswaController::class, 'cetakDataWali'])->name('cetak-data-wali');
        Route::post('/form-wali-siswa/store', [WaliSiswaController::class, 'storeDataWali'])->name('store-data-wali');
        Route::put('/akun-wali-siswa/update/{id}', [WaliSiswaController::class, 'updateDataWali'])->name('update-data-wali');
        Route::delete('/akun-wali-siswa/{id}', [WaliSiswaController::class, 'destroyWali'])->name('hapus-wali-siswa');
        //Mapel
        Route::get('/data-mapel', [MapelController::class, 'dataMapel'])->name('data-mapel');
        Route::get('/form-mapel', [MapelController::class, 'formMapel'])->name('form-mapel');
        Route::post('/form-mapel/store', [MapelController::class, 'storeDataMapel'])->name('store-data-mapel');
        Route::put('/data-mapel/update/{id}', [MapelController::class, 'updateDataMapel'])->name('update-data-mapel');
        Route::delete('/data-mapel/{id}', [MapelController::class, 'deleteDataMapel'])->name('hapus-data-mapel');
        //Program
        Route::get('/data-program', [ProgramController::class, 'dataProgram'])->name('data-program');
        Route::get('/form-program', [ProgramController::class, 'formProgram'])->name('form-program');
        Route::post('/form-program/store', [ProgramController::class, 'storeDataProgram'])->name('store-data-program');
        Route::put('/data-program/update/{id}', [ProgramController::class, 'updateDataProgram'])->name('update-data-program');
        Route::delete('/data-program/{id}', [ProgramController::class, 'deleteDataProgram'])->name('hapus-data-program');
        //Data Siswa
        Route::get('/data-siswa', [SiswaController::class, 'dataSiswa'])->name('data-siswa');
        Route::get('/form-siswa', [SiswaController::class, 'formSiswa'])->name('form-siswa');
        Route::get('/cetak-data-siswa', [SiswaController::class, 'cetakDataSiswa'])->name('cetak-data-siswa');
        Route::post('/form-siswa/store', [SiswaController::class, 'storeDataSiswa'])->name('store-data-siswa');
        Route::put('/data-siswa/update/{id}', [SiswaController::class, 'updateDataSiswa'])->name('update-data-siswa');
        Route::delete('/data-siswa/{id}', [SiswaController::class, 'deleteDataSiswa'])->name('hapus-data-siswa');
        //Data Mentor
        Route::get('/data-mentor', [MentorController::class, 'dataMentor'])->name('data-mentor');
        Route::get('/cetak-data-mentor', [MentorController::class, 'cetakDataMentor'])->name('cetak-data-mentor');
        Route::get('/form-mentor', [MentorController::class, 'formMentor'])->name('form-mentor');
        Route::post('/form-mentor/store', [MentorController::class, 'storeDataMentor'])->name('store-data-mentor');
        Route::put('/data-mentor/update/{id}', [MentorController::class, 'updateDataMentor'])->name('update-data-mentor');
        Route::delete('/data-mentor/{id}', [MentorController::class, 'deleteDataMentor'])->name('hapus-data-mentor');
        //Penilaian
        Route::get('/nilai-bulanan', [NilaiBulananController::class, 'nilaiBulanan'])->name('nilai-bulanan');
        Route::get('/cetak-nilai-bulanan', [NilaiBulananController::class, 'cetakNilaiBulanan'])->name('cetak-nilai-bulanan');
        Route::get('/form-nilai-bln', [NilaiBulananController::class, 'formNilaiBln'])->name('form-nilai-bln');
        Route::get('/get-mapel-by-tingkat/{idTingkat}', [NilaiBulananController::class, 'getMapelByTingkat']);
        Route::post('/form-nilai/store', [NilaiBulananController::class, 'storeNilai'])->name('store-nilai');
        Route::put('/data-nilai/update/{group_id}', [NilaiBulananController::class, 'updateNilai'])->name('update-nilai');
        Route::delete('/data-nilai/{id}', [NilaiBulananController::class, 'deleteNilai'])->name('hapus-nilai');
        Route::get('/nilai-semester', [NilaiSemesterController::class, 'nilaiSemester'])->name('nilai-semester');
        Route::get('/cetak-nilai-semester', [NilaiSemesterController::class, 'cetakNilaiSemester'])->name('cetak-nilai-semester');
    });
    // Auth Wali Murid
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    // Nilai Bulanan Siswa
    Route::get('/penilaian-bulanan-siswa', [PenilaianSiswaBlnController::class, 'PenilaianSiswaBln'])->name('penilaian-bulanan-siswa');
    Route::get('/detail-nilai-bulanan', [PenilaianSiswaBlnController::class, 'detailNilaiBulanan'])->name('detail-nilai-bulanan');
    Route::get('/raport-bulanan/{id?}/{bulan?}/{semester?}', [RaportBulananController::class, 'raportBulanan'])->name('raport-bulanan');
    // Nilai Semester Siswa
    Route::get('/penilaian-semester-siswa', [PenilaianSiswaSmtController::class, 'PenilaianSiswaSmt'])->name('penilaian-semester-siswa');
    Route::get('/detail-nilai-semester', [PenilaianSiswaSmtController::class, 'detailNilaiSemester'])->name('detail-nilai-semester');
    Route::get('/raport-semester/{id?}/{bulan?}/{semester?}', [RaportSmtController::class, 'RaportSemester'])->name('raport-semester');
});

// require __DIR__.'/auth.php';
