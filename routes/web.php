<?php

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

Route::get('tugas4', function () {
    //TIDAK BANYAK PROSES//
    return view('tugas4palindromejs');
});

Route::get('praktikum2', function () {
    //TIDAK BANYAK PROSES//
    return view('htmlprak2');
});

//JIKA KASUSNYA BUTUH NGELOAD BANYAK PROSES//
Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");

Route::get('ets',"ViewController@formDataBarang");
Route::get('palinphp',"ViewController@palindromecheckerPhp");

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');


Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');
Route::get('/mutasi/view/{id}','MutasiController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/view/{id}','AbsenController@detail');

Route::get('/lipstick','LipstickController@index');
Route::get('/lipstick/tambah','LipstickController@tambah');
Route::post('/lipstick/store','LipstickController@store');
Route::get('/lipstick/edit/{id}','LipstickController@edit');
Route::post('/lipstick/update','LipstickController@update');
Route::get('/lipstick/hapus/{id}','LipstickController@hapus');
Route::get('/lipstick/cari','LipstickController@cari');
Route::get('/lipstick/view/{id}','LipstickController@detail');