@extends('layout.bahagia')

@section('title', 'Tabel Karyawan ')
@section('judulhalaman', 'Daftar Karyawan')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<style>
    table {
        padding : 6px;
        align-content : center;
    }
</style>
<body>
    <h3>Data Karyawan</h3>
    <div class="container">
        {{-- <a href="/karyawan1/tambah"> + Tambah Data </a> --}}
        <table class="table table-bordered">
            <thead>
            <tr>

                <th class="isi-tabel">NIP</th>
                <th class="isi-tabel">Nama</th>
                <th class="isi-tabel">Pangkat</th>
                <th class="isi-tabel">Gaji</th>
            </tr>
            @foreach($karyawan1 as $k)
            <tr>
                <td class="isi-tabel">{{ $k->NIP }}</td>
                <td class="isi-tabel">{{ $k->Nama }}</td>
                <td class="isi-tabel">{{ $k->Pangkat }}</td>
                <td class="isi-tabel">{{ number_format($k->Gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="/karyawan1/view/{{ $k->NIP }}">View Detail</a>
				    |
                    <a href="/karyawan1/edit/{{ $k->NIP }}">Edit Data Lipstick</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <br>
    Halaman : {{ $karyawan1->currentPage() }} <br/>
	Jumlah Data : {{ $karyawan1->total() }} <br/>
	Data Per Halaman : {{ $karyawan1->perPage() }} <br/>
        {{ $karyawan1->links() }}

    </div>
@endsection

</body>
</html>
