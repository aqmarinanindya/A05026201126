<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$karyawan1 = DB::table('karyawan1')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);

    }
    public function edit($id)
    {
        $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();
        return view('karyawan1.edit',['karyawan1' => $karyawan1]);

    }
    public function update(Request $request)
{
	DB::table('karyawan1')->where('NIP',$request->id)->update([

		'Nama' => $request->Nama,
		'Pangkat' => $request->Pangkat,
		'Gaji' => $request->Gaji
	]);
	return redirect('/karyawan1');
}
public function detail($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
}
    //
}
