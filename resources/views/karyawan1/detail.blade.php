@extends('layout.bahagia')

@section('title', 'Detail Tabel Karyawan')
@section('judulhalaman', 'Detail Data Karyawan')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Karyawan</title>
</head>
<style>
    /* .form-group{
        margin-right : 100px;
    } */

</style>
<body>
    @foreach($karyawan1 as $k)
    <div class="container">

        <h3>Detail Data Karyawan</h3><br>
        <div class="form-group row">
            <label class="col-sm-2" for="NIP"> NIP </label>
            <div class="col-sm-10" > : {{ $k->NIP}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Nama"> Nama </label>
            <div class="col-sm-10" > : {{ $k->Nama}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Pangkat"> Pangkat </label>
            <div class="col-sm-10" > : {{ $k->Pangkat }}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Gaji"> Gaji </label>
            <div class="col-sm-10" > : {{ number_format($k->Gaji, 0, ',', '.') }}</div>
        </div>
</div>
@endforeach
<br>
<a href="/karyawan1"> Kembali</a>
@endsection
</body></html>
