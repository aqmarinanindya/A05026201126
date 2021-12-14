@extends('layout.bahagia')

@section('title', 'Detail Tabel Absen')
@section('judulhalaman', 'Detail Data Absen')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Absen</title>
</head>
<style>
    /* .form-group{
        margin-right : 100px;
    } */

</style>
<body>
    @foreach($absen as $a)
    <div class="container">
        <h3>Detail Data Absen</h3><br>
        <div class="form-group row">
            <label class="col-sm-2" for="ID"> ID </label>
            <div class="col-sm-10" > : {{ $a->ID}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="IDPegawai"> IDPegawai </label>
            <div class="col-sm-10" > : {{ $a->IDPegawai}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Tanggal"> Tanggal </label>
            <div class="col-sm-10" > : {{ $a->Tanggal}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Status"> Status </label>
            <div class="col-sm-10" > : {{ $a->Status}}</div>
        </div>
</div>
@endforeach
<br>
<a href="/absen"> Kembali</a>
@endsection
</body></html>
