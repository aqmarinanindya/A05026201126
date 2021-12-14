@extends('layout.bahagia')

@section('title', 'Tabel Lipstick')
@section('judulhalaman', 'Daftar Lipstick')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Data Lipstick</title>
</head>
<style>
    table {
        padding : 6px;
        align-content : center;
    }
</style>
<body>
    <h3>Data Lipstick</h3>
    <div class="container">
        <a href="/lipstick/tambah"> + Tambah Data Lipstick</a>
        <div class="container" align="center">
        <form action="/lipstick/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Lipstick berdasarkan Merk" value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>
        <table class="table table-bordered">
            <thead>
            <tr>

                <th class="isi-tabel">Kode Lipstick</th>
                <th class="isi-tabel">Merk Lipstick</th>
                <th class="isi-tabel">Stock Lipstick</th>
                <th class="isi-tabel">Tersedia</th>
                <th class="isi-tabel">Opsi</th>
            </tr>
            @foreach($lipstick as $a)
            <tr>

                <td class="isi-tabel">{{ $a->kodelipstick }}</td>
                <td class="isi-tabel">{{ $a->merklipstick }}</td>
                <td class="isi-tabel">{{ $a->stocklipstick }}</td>
                <td class="isi-tabel">{{ $a->tersedia }}</td>
                <td>
                    <a href="/lipstick/view/{{ $a->kodelipstick }}">View Detail</a>
				    |
                    <a href="/lipstick/edit/{{ $a->kodelipstick }}">Edit Data Lipstick</a>
                    |
                    <a href="/lipstick/hapus/{{ $a->kodelipstick }}">Delete Data Lipstick</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <br>
    Halaman : {{ $lipstick->currentPage() }} <br/>
	Jumlah Data : {{ $lipstick->total() }} <br/>
	Data Per Halaman : {{ $lipstick->perPage() }} <br/>
        {{ $lipstick->links() }}

    <p>
        Keterangan Tersedia: <br>
        Y : Ya <br>
        T : Tidak <br>
        </p>
    </div>
@endsection

</body>
</html>
