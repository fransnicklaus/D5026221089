<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = DB::table('mahasiswa')->get();
    	return view('mahasiswaIndex',['mahasiswa' => $mahasiswa]);
    }

    public function view($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
    	return view('mahasiswaView',['mahasiswa' => $mahasiswa]);

    }

    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
        return view('mahasiswaEdit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
	DB::table('mahasiswa')->where('NRP',$request->id)->update([
		'NRP' => $request->nrp,
		'Nama' => $request->nama,
		'Jurusan' => $request->jurusan,
        'IPK' => $request->ipk,
	]);
	    return redirect('/mahasiswa');
    }
}
