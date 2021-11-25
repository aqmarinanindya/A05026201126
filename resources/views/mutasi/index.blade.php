<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mutasi</title>
</head>
<body>
	<h3>Data Mutasi</h3>
	<a href="/mutasi/tambah"> + Tambah Data Mutasi</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->ID }}</td>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
            <td>{{ $m->MulaiBertugas }}</td>
			<td>

				<a href="/mutasi/edit/{{ $m->ID }}">Edit</a>

				|

				<a href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>

			</td>

		</tr>

		@endforeach

	</table>

 

 

</body>

</html>
