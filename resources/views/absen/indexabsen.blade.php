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
    <div class="container">
        <a href="/absen/add"> + Tambah Absensi</a>
        <div class="container" align="center">
            <form action="/absen/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Absensi berdasarkan nama" value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>
	<table class="table table-bordered">
        <thead>
		<tr>

			<th class="isi-tabel">IDPegawai</th>
			<th class="isi-tabel">Tanggal</th>
			<th class="isi-tabel">Status</th>
			<th class="isi-tabel">Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td class="isi-tabel">{{ $a->IDPegawai }}</td>
			<td class="isi-tabel">{{ $a->Tanggal }}</td>
			<td class="isi-tabel">{{ $a->Status }}</td>
			<td>
                <a href="/absen/view/{{ $a->ID }}">View Detail</a>
				|
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
    </tbody>
	</table>
    <br>
Halaman : {{ $absen->currentPage() }} <br/>
	Jumlah Data : {{ $absen->total() }} <br/>
	Data Per Halaman : {{ $absen->perPage() }} <br/>
    {{ $absen->links() }}
</div>
    <p>
        Keterangan Status: <br>
        H : Hadir <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>


@endsection
</body>
</html>
