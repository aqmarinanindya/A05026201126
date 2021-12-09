@extends('layout.bahagia')

@section('title', 'Tabel Absensi')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Tabel Absen</title>
</head>
<style>
    table {
        padding : 6px;
        align-content : center;
    }
    .container{
        margin-right : 100px;
    }
</style>

<body>

	<h2>Daftar Absensi Pegawai</h2>


	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>
    <div class="container">
	<table class="table table-bordered">
        <thead>
		<tr>

			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
    </tbody>
	</table>
</div>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>
@endsection
</body>
</html>
