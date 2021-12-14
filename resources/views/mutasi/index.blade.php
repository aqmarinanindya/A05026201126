@extends('layout.bahagia')

@section('title', 'Tabel Mutasi')
@section('judulhalaman', 'Daftar Mutasi Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mutasi</title>
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
	<h3>Data Mutasi</h3>
	<br/>
	<br/>
	<div class="container">
        <a href="/mutasi/tambah"> + Tambah Data Mutasi</a>
        <div class="container" align="center">
            <form action="/mutasi/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari mutasi berdasarkan id pegawai" value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
		<tr>
			<th class="isi-tabel">ID</th>
			<th class="isi-tabel">IDPegawai</th>
			<th class="isi-tabel">Departemen</th>
		    <th class="isi-tabel">SubDepartemen</th>
			<th class="isi-tabel">MulaiBertugas</th>
            <th class="isi-tabel">Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td class="isi-tabel">{{ $m->ID }}</td>
			<td class="isi-tabel">{{ $m->IDPegawai }}</td>
			<td class="isi-tabel">{{ $m->Departemen }}</td>
			<td class="isi-tabel">{{ $m->SubDepartemen }}</td>
            <td class="isi-tabel">{{ $m->MulaiBertugas }}</td>
			<td>
                <a href="/mutasi/view/{{ $m->ID }}">View Detail</a>
				|
				<a href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>

			</td>

		</tr>

		@endforeach
    </tbody>
</table><br>
Halaman : {{ $mutasi->currentPage() }} <br/>
	Jumlah Data : {{ $mutasi->total() }} <br/>
	Data Per Halaman : {{ $mutasi->perPage() }} <br/>
{{ $mutasi->links() }}
</div>
@endsection

</body>

</html>
