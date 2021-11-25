<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
	<h3>Tambah Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Departemen <input type="text" name="Departemen" required="required"> <br/>
		SubDepartemen <input type="text" name="SubDepartemen" required="required"> <br/>
        MulaiBertugas <input type="datetime-local" name="MulaiBertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
