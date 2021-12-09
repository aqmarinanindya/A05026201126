@extends('layout.bahagia')

@section('title', 'Mengedit Tabel Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<style>
    .form-group{
        margin-right : 100px;
    }
</style>
<body>


	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
    <div class="container">
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-10">
		<input type="text" class="form-control" name="nama" id="nama" required="required" value="{{ $p->pegawai_nama }}"> <br/>
            </div>
        </div><br>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="jabatan">Jabatan :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="umur">Umur:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="umur" value="{{ $p->pegawai_umur }}" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" value="{{ $p->pegawai_alamat }}" required="required"></textarea> <br/>

            </div>
        </div>
        <div class="form-group"><br/>
            <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="form-control" value="Simpan Data">
    </div>
</div>
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>


	</form>
</div>
	@endforeach

@endsection
</body>
</html>
