@extends('layout.bahagia')

@section('title', 'Detail Tabel Mutasi')
@section('judulhalaman', 'Detail Data Mutasi')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Mutasi</title>
</head>
<style>
    /* .form-group{
        margin-right : 100px;
    } */

</style>
<body>
    @foreach($mutasi as $m)
    <div class="container">
        <h3>Detail Data Mutasi</h3><br>
        <div class="form-group row">
            <label class="col-sm-2" for="ID"> ID </label>
            <div class="col-sm-10" > : {{ $m->ID}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="IDPegawai"> IDPegawai </label>
            <div class="col-sm-10" > : {{ $m->IDPegawai}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Departemen"> Departemen </label>
            <div class="col-sm-10" > : {{ $m->Departemen}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="SubDepartemen"> SubDepartemen </label>
            <div class="col-sm-10" > : {{ $m->SubDepartemen}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="MulaiBertugas"> MulaiBertugas </label>
            <div class="col-sm-10" > : {{ $m->MulaiBertugas}}</div>
        </div>
</div>
@endforeach
<br>
<a href="/mutasi"> Kembali</a>
@endsection
</body></html>
