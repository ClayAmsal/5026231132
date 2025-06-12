<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BisDBController;
use App\Http\Controllers\KaryawanDBController;
// import java.io;

//System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('ets', function () {
	return view('index');
});

Route::get('gridcontainer', function () {
	return view('gridcontainer');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('pseudo-element', function () {
	return view('pseudo-element');
});

Route::get('soallatihan5', function () {
	return view('soallatihan5');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('dosen', [DosenController::class, 'index1']);
Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai1/{nama}', [PegawaiController::class, 'index1']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route bisDB
Route::get('/bis', [BisDBController::class, 'indexbis']);
Route::get('/bis/tambah', [BisDBController::class, 'tambahbis']);
Route::post('/bis/store', [BisDBController::class, 'storebis']); //jika form dikirim, route ini akan dijalankan
Route::get('/bis/edit/{id}',[BisDBController::class, 'editbis']);
Route::post('/bis/update',[BisDBController::class, 'updatebis']);
Route::get('/bis/hapus/{id}', [BisDBController::class, 'hapusbis']);
Route::get('/bis/cari', [BisDBController::class, 'caribis']);

//route karyawanDB
Route::get('/karyawan', [KaryawanDBController::class, 'indexkaryawan']);
Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambahkaryawan']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'storekaryawan']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapuskaryawan']);

