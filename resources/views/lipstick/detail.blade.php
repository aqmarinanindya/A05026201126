@extends('layout.bahagia')

@section('title', 'Detail Tabel Lipstick')
@section('judulhalaman', 'Detail Data Lipstick')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Lipstick</title>
</head>
<style>
    /* .form-group{
        margin-right : 100px;
    } */

</style>
<body>
    @foreach($lipstick as $a)
    <div class="container">

        <h3>Detail Data Lipstick</h3><br>
        <div class="form-group row">
            <label class="col-sm-2" for="kodelipstick"> Kode Lipstick </label>
            <div class="col-sm-10" > : {{ $a->kodelipstick}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="merklipstick"> Merk Lipstick </label>
            <div class="col-sm-10" > : {{ $a->merklipstick}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="stocklipstick"> Stock Lipstick </label>
            <div class="col-sm-10" > : {{ $a->stocklipstick}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia </label>
            <div class="col-sm-10" > : {{ $a->tersedia}}</div>
        </div>
</div>
@endforeach
<br>
<a href="/lipstick"> Kembali</a>
@endsection
</body></html>
