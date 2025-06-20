<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanDBController extends Controller
{
    public function indexnewkaryawan()
    {
        $newkaryawan = DB::table('newkaryawan')->get();
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);
    }

    public function tambahnewkaryawan(){
        return view('tambahnewkaryawan');
    }

    public function storenewkaryawan(Request $request){
	    $request->validate([
    	    'nip' => 'required|unique:newkaryawan,nip'
	    ],
        [
		    'nip.required' => 'nip harus diisi.',
		    'nip.unique' => 'nip sudah digunakan, silakan gunakan nip lain.'
        ]);

        DB::table('newkaryawan')->insert([
		'nip' => $request->nip,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	    ]);

        return redirect('/eas');

    }

    public function hapusnewkaryawan($id){
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('newkaryawan')->where('nip',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/eas');
    }
}
