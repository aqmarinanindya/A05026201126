<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LipstickController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$lipstick = DB::table('lipstick')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('lipstick.index',['lipstick' => $lipstick]);

    }
    public function tambah()
    {
	return view('lipstick.tambah');
    }
    public function store(Request $request)
    {
	DB::table('lipstick')->insert([
		'kodelipstick' => $request->kodelipstick,
		'merklipstick' => $request->merklipstick,
		'stocklipstick' => $request->stocklipstick,
		'tersedia' => $request->tersedia
	]);
	return redirect('/lipstick');
    }
    public function edit($kodelipstick)
    {
        $lipstick = DB::table('lipstick')->where('kodelipstick',$kodelipstick)->get();
        return view('lipstick.edit',['lipstick' => $lipstick]);

    }
    public function update(Request $request)
{
	DB::table('lipstick')->where('kodelipstick',$request->kodelipstick)->update([
		'kodelipstick' => $request->kodelipstick,
		'merklipstick' => $request->merklipstick,
		'stocklipstick' => $request->stocklipstick,
		'tersedia' => $request->tersedia
	]);
	return redirect('/lipstick');
}
public function hapus($kodelipstick)
{
	DB::table('lipstick')->where('kodelipstick', $kodelipstick)->delete();
	return redirect('/lipstick');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$lipstick = DB::table('lipstick')
		->where('merklipstick','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('lipstick.index',['lipstick' => $lipstick]);

	}
    public function detail($kodelipstick)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $lipstick = DB::table('lipstick')->where('kodelipstick', $kodelipstick)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('lipstick.detail', ['lipstick' => $lipstick ]);
    }
}

