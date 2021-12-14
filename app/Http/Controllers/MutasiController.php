<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    //
    public function index()
    {
        // DB::table('')->get();
        // $mutasi = DB::table('mutasi')->paginate(5);
        $mutasi = DB::table('mutasi')
        ->join('pegawai','mutasi.IDPegawai','=','pegawai.pegawai_id')
        ->select('mutasi.*','pegawai.pegawai_nama')
        ->paginate(5);
        return view('mutasi.index',['mutasi' => $mutasi]);
    }
    public function tambah()
    {
	return view('mutasi.tambah');
    }
    public function store(Request $request)
{
	DB::table('mutasi')->insert([
		'ID' => $request->ID,
		'IDPegawai' => $request->IDPegawai,
		'Departemen' => $request->Departemen,
		'SubDepartemen' => $request->SubDepartemen,
        'MulaiBertugas' => $request->MulaiBertugas
	]);
	return redirect('/mutasi');
}
    public function edit($id)
    {
         // mengambil data absen berdasarkan id yang dipilih
         $mutasi = DB::table('mutasi')->where('ID', $id)->get();

         // mengambil data dari table pegawai
         $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key



         // passing data absen yang didapat ke view update.blade.php
         return view('mutasi.edit', ['mutasi' => $mutasi,'pegawai' => $pegawai ]);
        // $mutasi = DB::table('mutasi')->where('ID',$id)->get();
        // return view('mutasi.edit',['mutasi' => $mutasi]);

    }
    public function update(Request $request)
{
	DB::table('mutasi')->where('ID',$request->id)->update([
		'ID' => $request->ID,
		'IDPegawai' => $request->IDPegawai,
		'Departemen' => $request->Departemen,
		'SubDepartemen' => $request->SubDepartemen,
        'MulaiBertugas' => $request->MulaiBertugas
	]);
	return redirect('/mutasi');
}
public function hapus($id)
{
	DB::table('mutasi')->where('ID',$id)->delete();
	return redirect('/mutasi');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mutasi = DB::table('mutasi')
		->where('IDPegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mutasi.index',['mutasi' => $mutasi]);

	}
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('mutasi.detail', ['mutasi' => $mutasi]);
    }
}

