@extends('layout.bahagia')

@section('title', 'Menambah Data Absensi')
@section('judulhalaman', 'Tambah Absensi Pegawai')

@section('konten')
<!DOCTYPE html>
<html>
<head>
    <title>Menambah Absensi</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>
<body>
    <div class="container">
    <h3>Tambah Absensi Pegawai</h3><br>
    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="id" value="{{ $a->ID }}"> --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="IDPegawai">IDPegawai :</label>
            <div class="col-sm-10">
                <input type="number" name="IDPegawai" class="form-control" required="required"> <br/>
            </div>
        </div>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='col-sm-2 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="Tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>
        <div class="form-group"><br/>
            <label class="control-label col-sm-2" for="Status">Status :</label>
            <div class="col-sm-10">
                <label class="radio-inline" for="hadir"><input type="radio" id="hadir" name="Status" value="H" checked="checked">Hadir</label>
                <label class="radio-inline" for="html"><input type="radio" id="html" name="Status" value="I" >Izin</label>
                <label class="radio-inline" for="css"><input type="radio" id="css" name="Status" value="S">Sakit</label>
                <label class="radio-inline" for="javascript"><input type="radio" id="javascript" name="Status" value="A">Alpha</label>
            </div>
    </div>
        <p><input type="submit" value="Simpan Data"></p>
    </form>
    <p> <a href="/absen"> Kembali</a></p>
</div>
@endsection
</body>
</html>
