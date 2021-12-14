@extends('layout.bahagia')

@section('title', 'Mengedit Tabel Mutasi')
@section('judulhalaman', 'Edit Mutasi Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<style>
    .form-group{
        margin-right : 100px;
    }
</style>
<body>
	<h3>Edit Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>
    <div class="container">
	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
        <div class="form-group ">
            <label class="control-label col-sm-2" for="ID">ID:</label>
            <div class="col-sm-10">
                <input type="number" name="ID" value="{{ $m->ID}}" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group row"><br/>
            <label class="control-label col-sm-2" for="IDPegawai">IDPegawai :</label>
            <div class="col-sm-10">
                <select name="IDPegawai" >
                    @foreach($pegawai as $p)
                     <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $m->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Departemen">Departemen:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Departemen" value="{{ $m->Departemen }}" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Subdepartemen">Subdepartemen:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="SubDepartemen" value="{{ $m->SubDepartemen }}" required="required"> <br/>

            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="MulaiBertugas">MulaiBertugas:</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="MulaiBertugas" value="{{ $m->MulaiBertugas }}" required="required"> <br/>

            </div>
        </div>
        <div class="form-group"><br/>
            <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="form-control" value="Simpan Data">
    </div>
</div>
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>

	</form>
</div>
	@endforeach
@endsection

</body>
</html>
