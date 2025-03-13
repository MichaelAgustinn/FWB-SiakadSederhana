<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahCOntroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index']);

//! Matakuliah 
Route::get('/lihatmk', [MatakuliahCOntroller::class, 'lihatMk'])->name('lihatMk');
Route::get('/tambahmk', [MatakuliahCOntroller::class, 'tambahMk'])->name('tambahmk');
Route::post('/simpanmk', [MatakuliahCOntroller::class, 'simpanMK'])->name('simpanMK');
Route::get('/hapusmk/{id}', [MatakuliahCOntroller::class, 'hapusMK'])->name('hapusMK');
Route::match(['get', 'post'], '/editmk/{id}', [MatakuliahCOntroller::class, 'editMK'])->name('editMK');

//! Dosen 
Route::get('/lihatdosen', [DosenController::class, 'lihatDosen'])->name('lihatDosen');
Route::match(['get', 'post'], '/tambahdosen', [DosenController::class, 'tambahDosen'])->name('tambahDosen');
Route::get('/hapusdosen/{id}', [DosenController::class, 'hapusDosen'])->name('hapusDosen');
Route::match(['get', 'post'], '/editdosen/{id}', [DosenController::class, 'editDosen'])->name('editDosen');

//! Mahasiswa 
Route::get('/lihatmahasiswa', [MahasiswaController::class, 'lihatMahasiswa'])->name('lihatMahasiswa');
Route::match(['get', 'post'], '/tambahmahasiswa', [MahasiswaController::class, 'tambahMahasiswa'])->name('tambahMahasiswa');
Route::get('/hapusmahasiswa/{id}', [MahasiswaController::class, 'hapusMahasiswa'])->name('hapusMahasiswa');
Route::match(['get', 'post'], '/editmahasiswa/{id}', [MahasiswaController::class, 'editMahasiswa'])->name('editMahasiswa');

//! Jadwal
Route::get('/lihatjadwal', [JadwalController::class, 'lihatJadwal'])->name('lihatJadwal');
Route::match(['get', 'post'], '/tambahjadwal', [JadwalController::class, 'tambahJadwal'])->name('tambahJadwal');
Route::match(['get', 'post'], '/editjadwal/{id}', [JadwalController::class, 'editJadwal'])->name('editJadwal');
Route::get('/hapusjadwal/{id}', [JadwalController::class, 'hapusJadwal'])->name('hapusJadwal');

//! Jadwal Mahasiswa
Route::get('/lihatjadwalmhs', [JadwalController::class, 'lihatJadwalMhs'])->name('lihatJadwalMhs');
Route::match(['get', 'post'], '/tambahjadwalmhs', [JadwalController::class, 'tambahJadwalMhs'])->name('tambahJadwalMhs');
Route::match(['get', 'post'], '/editjadwalmhs/{id}', [JadwalController::class, 'editJadwalMhs'])->name('tambahJadwalMhs');
Route::get('/hapusjadwalmhs/{id}', [JadwalController::class, 'hapusJadwalMhs'])->name('hapusJadwalMhs');
