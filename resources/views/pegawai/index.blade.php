@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
<!DOCTYPE html>

<html>

<head>

	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>

</head>
<style>
    table {
        padding : 6px;
        align-content : center;
    }
</style>

<body>

 

	<h2>www.malasngoding.com</h2>

	<h3>Data Pegawai</h3>

 

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>



	<br/>

	<br/>

     <div class="container">
        <table class="table table-bordered">
            <thead>

		<tr>

			<th>Nama</th>

			<th>Jabatan</th>

			<th>Umur</th>

			<th>Alamat</th>

			<th>Opsi</th>

		</tr>

		@foreach($pegawai as $p)

		<tr>

			<td>{{ $p->pegawai_nama }}</td>

			<td>{{ $p->pegawai_jabatan }}</td>

			<td>{{ $p->pegawai_umur }}</td>

			<td>{{ $p->pegawai_alamat }}</td>

			<td>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>

				|

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>

			</td>

		</tr>

		@endforeach
    </tbody>
</table>
</div>
 

 @endsection

</body>

</html>
