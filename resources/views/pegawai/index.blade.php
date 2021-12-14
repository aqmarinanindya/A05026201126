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
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

<body>
	<h3>Data Pegawai</h3>
    <div class="container">
        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        <div class="container" align="center">
        <form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama" value="{{ old('cari') }}">
		<input type="submit" class="btn btn-default" value="CARI">
	</form>
</div>
        <table class="table table-bordered">
            <thead>

		<tr>

			<th class="isi-tabel" >Nama</th>

			<th class="isi-tabel" >Jabatan</th>

			<th class="isi-tabel" >Umur</th>

			<th class="isi-tabel" >Alamat</th>

			<th class="isi-tabel" >Opsi</th>

		</tr>

		@foreach($pegawai as $p)

		<tr>

			<td class="isi-tabel">{{ $p->pegawai_nama }}</td>

			<td class="isi-tabel">{{ $p->pegawai_jabatan }}</td>

			<td class="isi-tabel">{{ $p->pegawai_umur }}</td>

			<td class="isi-tabel">{{ $p->pegawai_alamat }}</td>

			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>

			</td>

		</tr>

		@endforeach
    </tbody>
</table>
<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>
{{ $pegawai->links() }}
</div>
@endsection

</body>

</html>
