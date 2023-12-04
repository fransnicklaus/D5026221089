<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
    // public funtion index() {
    //     $nilai = DB::table('nilaikuliah')->get();
    //     return view('nilaikuliah',['nilaikuliah'==>$nilai]);
    // }

    public function index()
    {
    	// mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();
        // $pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('nilaikuliah',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah()
    {
        return view('tambahnilai');
    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->nrp,
		'NilaiAngka' => $request->nilai,
		'SKS' => $request->sks,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilai');

    }
}
