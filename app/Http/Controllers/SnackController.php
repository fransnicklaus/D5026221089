<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    public function index() {
        $snack = DB::table('snack')->get();
    	return view('snackIndex',['snack' => $snack]);
    }

    public function tambah()
    {
        return view('snackTambah');
    }

    public function store(Request $request)
    {
	DB::table('snack')->insert([
		'merksnack' => $request->merk,
		'stocksnack' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	return redirect('/snack');
    }

    public function edit($id)
    {
	$snack = DB::table('snack')->where('kodesnack',$id)->get();
	return view('snackEdit',['snack' => $snack]);
    }

    public function update(Request $request)
    {
	DB::table('snack')->where('kodesnack',$request->id)->update([
		'merksnack' => $request->merk,
		'stocksnack' => $request->stock,
		'tersedia' => $request->tersedia,
	]);
	return redirect('/snack');
    }

    public function hapus($id)
    {
	DB::table('snack')->where('kodesnack',$id)->delete();
	return redirect('/snack');
    }

    public function view($id)
    {
        $snack = DB::table('snack')->where('kodesnack',$id)->get();
    	return view('snackView',['snack' => $snack]);

    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$snack = DB::table('snack')
		->where('merksnack','like',"%".$cari."%")
		->paginate();
		return view('snackIndex',['snack' => $snack]);
	}
}
