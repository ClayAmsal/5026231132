<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function indexkaryawan()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //all records in array
        $karyawan = DB::table('karyawan')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);
    }


// method untuk menampilkan view form tambah pegawai
    public function tambahkaryawan(){
        // memanggil view tambah
        return view('tambahkaryawan');
    }

    // method untuk insert data ke table pegawai
public function storekaryawan(Request $request)
{
	// $request->validate([
    // 'tersedia' => 'required|in:0,1'
    // ]);

    // insert data ke table pegawai
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kode,
		'namalengkap' => $request->nama,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');

}

// method untuk edit data pegawai
// public function editbis($id)
// {
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$bis = DB::table('bis')->where('bis_id',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('editbis',['bis' => $bis]);

// }

// update data pegawai
// public function updatebis(Request $request)
// {
// 	$request->validate([
//     'tersedia' => 'required|in:0,1'
//     ]);

//     // update data pegawai
// 	DB::table('bis')->where('bis_id',$request->id)->update([
// 		'merk_bis' => $request->merk,
// 		'harga_bis' => $request->harga,
// 		'tersedia' => $request->tersedia,
// 		'berat' => $request->berat
// 	]);
// 	// alihkan halaman ke halaman pegawai
// 	return redirect('/bis');
// }

// method untuk hapus data pegawai
public function hapuskaryawan($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}

// public function caribis(Request $request)
// 	{
// 		// menangkap data pencarian
// 		$cari = $request->cari;

//     		// mengambil data dari table pegawai sesuai pencarian data
// 		$bis = DB::table('bis')
// 		->where('merk_bis','like',"%".$cari."%")
// 		->paginate();

//     		// mengirim data pegawai ke view index
// 		return view('indexbis',['bis' => $bis]);

// 	}
}
