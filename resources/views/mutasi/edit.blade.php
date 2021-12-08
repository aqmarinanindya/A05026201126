@extends('layout.bahagia')

@section('title', 'Mengedit Tabel Mutasi')
@section('judulhalaman', 'Edit Mutasi Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID <input type="number" required="required" name="ID" value="{{ $m->ID}}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="Departemen" value="{{ $m->Departemen }}"> <br/>
		SubDepartemen <input type="text" required="required" name="SubDepartemen" value="{{ $m->SubDepartemen }}"><br/>
        MulaiBertugas <input type="datetime-local" required="required" name="MulaiBertugas" value="{{ $m->MulaiBertugas }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection

</body>
</html>
