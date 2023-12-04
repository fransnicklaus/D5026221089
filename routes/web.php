<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('halo',function() {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});


Route::get('halo2',function() {
    return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog2',function() {
    return view('blog');
});

Route::get('berita',function() {
    return view('berita');
});

Route::get('hello',function() {
    return view('hello');
});

Route::get('badges',function() {
    return view('badges');
});

Route::get('welcome',function() {
    return view('welcome');
});

Route::get('js1',function() {
    return view('js1');
});

Route::get('js2',function() {
    return view('js2');
});

Route::get('validasi1',function() {
    return view('validasi1');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('5026221089', function() {
    return view('5026221089-linktree');
});

Route::get('ETS', function() {
    return view('ETS');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/nilai','App\Http\Controllers\NilaikuliahController@index');
Route::get('/nilai/tambah','App\Http\Controllers\NilaikuliahController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaikuliahController@store');

