@extends('layout.bahagia')

@section('title', 'Mengedit Data Lipstick')
@section('judulhalaman', 'Edit Data Lipstick')

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
	<h3>Edit Data Lipstick</h3>
	<br/>
	<br/>
    <div class="container">
        <a href="/lipstick"> Kembali</a>
	@foreach($lipstick as $a)
	<form action="/lipstick/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="kodelipstick">kodelipstick :</label>
            <div class="col-sm-10">
                <input type="number" name="kodelipstick" value="{{ $a->kodelipstick}}" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="merklipstick">merklipstick :</label>
            <div class="col-sm-10">
                <input type="text" name="merklipstick" value="{{ $a->merklipstick }}" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="stocklipstick">stocklipstick :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stocklipstick" value="{{ $a->stocklipstick}}" required="required"> <br/>
            </div>
        </div>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="tersedia">tersedia :</label>
            <div class="col-sm-10">
                <label class="radio-inline" for="html"><input type="radio"  id="html" name="tersedia" value="Y"  @if ($a->tersedia === "Y" ) checked="checked" @endif>Ya</label>
                <label class="radio-inline" for="css"><input type="radio"  id="css" name="tersedia" value="T"  @if ($a->tersedia === "T" ) checked="checked" @endif >Tidak</label>
            </div>
        </div><br>
        <div class="form-group"><br/>
            <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="form-control" value="Simpan Data">
    </div>
</div>

	</form>
</div>
	@endforeach
@endsection

</body>
</html>
