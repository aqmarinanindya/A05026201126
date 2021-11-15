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
