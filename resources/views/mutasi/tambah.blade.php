@extends('layout.bahagia')

@section('title', 'Menambah Data Mutasi')
@section('judulhalaman', 'Tambah Mutasi Pegawai')

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
	<h3>Tambah Data Mutasi</h3>

	<br/>
	<br/>
    <div class="container">
        <p> <a href="/mutasi"> Kembali</a></p>
	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="ID">ID:</label>
            <div class="col-sm-10">
                <input type="number" name="ID" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="IDPegawai">IDPegawai :</label>
            <div class="col-sm-10">
                <input type="number" name="IDPegawai" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Departemen">Departemen:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Departemen" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Subdepartemen">Subdepartemen:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="SubDepartemen" required="required"> <br/>

            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="MulaiBertugas">MulaiBertugas:</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="MulaiBertugas" required="required"> <br/>

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
