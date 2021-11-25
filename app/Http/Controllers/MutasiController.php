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
        $mutasi = DB::table('mutasi')->get();
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
        $mutasi = DB::table('mutasi')->where('ID',$id)->get();
        return view('mutasi.edit',['mutasi' => $mutasi]);

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
}

