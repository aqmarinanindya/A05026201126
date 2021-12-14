@extends('layout.bahagia')

@section('title', 'Menambah Data Lipstick')
@section('judulhalaman', 'Tambah Data Lipstick')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    .form-group{
        margin-right : 100px;
    }
</style>
<body>
	<h3>Tambah Data Lipstick</h3>

	<br/>
	<br/>
    <div class="container">
        <p> <a href="/lipstick"> Kembali</a></p>
	<form action="/lipstick/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="kodelipstick">Kode Lipstick</label>
            <div class="col-sm-10">
                <input type="number" name="kodelipstick" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="merklipstick">Merk Lipstick</label>
            <div class="col-sm-10">
                <input type="text" name="merklipstick" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="stocklipstick">Stock Lipstick</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stocklipstick" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="tersedia">Tersedia</label>
            <div class="col-sm-10">
                <label class="radio-inline" for="html"><input type="radio"  id="html" name="tersedia" value="Y" checked="checked">Ya</label>
                <label class="radio-inline" for="css"><input type="radio"  id="css" name="tersedia" value="T" >Tidak</label>
            </div>
        </div><br>
        <div class="form-group"><br/>
            <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="form-control" value="Simpan Data">
    </div>
</div>

	</form>
</div>

@endsection
</body>
</html>
