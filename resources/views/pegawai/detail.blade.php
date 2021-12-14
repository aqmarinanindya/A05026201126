@extends('layout.bahagia')

@section('title', 'Detail Tabel Pegawai')
@section('judulhalaman', 'Detail Data Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Pegawai</title>
</head>
<style>
    /* .form-group{
        margin-right : 100px;
    } */

</style>
<body>
    @foreach($pegawai as $p)
    <div class="container">
        <h3>Detail Data Pegawai</h3><br>
        <div class="form-group row">
            <label class="col-sm-2" for="nama"> Nama </label>
            <div class="col-sm-10" > : {{ $p->pegawai_nama}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="jabatan"> Jabatan </label>
            <div class="col-sm-10" > : {{ $p->pegawai_jabatan}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="umur"> Umur </label>
            <div class="col-sm-10" > : {{ $p->pegawai_umur}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="alamat"> Alamat </label>
            <div class="col-sm-10" > : {{ $p->pegawai_alamat}}</div>
        </div>
</div>
@endforeach
<br>
<a href="/pegawai"> Kembali</a>
@endsection
</body></html>
