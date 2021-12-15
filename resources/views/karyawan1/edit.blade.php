@extends('layout.bahagia')

@section('title', 'Mengedit Data Karyawan')
@section('judulhalaman', 'Edit Data Karyawan')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Karyawan</title>
</head>
<style>
    .form-group{
        margin-right : 100px;
    }
</style>
<body>
	<h3>Edit Data Karyawan</h3>
	<br/>
	<br/>
    <div class="container">
        <a href="/karyawan1"> Kembali</a>
	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="NIP">NIP</label>
            <div class="col-sm-10">
                <input type="number" name="id" value="{{ $k->NIP }}" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Nama">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="Nama" value="{{ $k->Nama }}" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Pangkat">Pangkat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Pangkat" value="{{ $k->Pangkat }}" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Gaji">Gaji</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Gaji" value="{{ $k->Gaji }}" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="form-control" value="Simpan Data">
        </div>
    </div>


	</form>
</div>
	@endforeach
@endsection

</body>
</html>
