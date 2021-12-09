@extends('layout.bahagia')

@section('title', 'Menambah Data Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    .form-group{
        margin-right : 100px;
    }
</style>
<body>


	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    <div class="container">
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-10">
		<input type="text" class="form-control" name="nama" id="nama" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="jabatan">Jabatan :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="umur">Umur:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="umur" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat"required="required"></textarea> <br/>

            </div>
        </div>
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
