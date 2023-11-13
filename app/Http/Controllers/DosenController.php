<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a * $b;
    	return "<h1>Hasil perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog() {
        $nama = "Budi" ;
        $alamat = "Surabaya" ;
        $umur = 19 ;
        return view('blog',['nama' => $nama,'alamat' => $alamat,'umur' => $umur]);
    }

    public function shownama($nama) {
        return "Anda telat mengisikan  : " . $nama; // $nama itu sama genan {nama} di web.pbp
    }

    public function formulir() {
        // Cek soal hal akses
        return view('formulir');
    }


    public function proses(Request $request) {
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
    