<!DOCTYPE html>
<html>
<head>
	<title>Barang Masuk</title>
</head>
<body>
 
	<h3>Input Data Barang Masuk</h3>
 
	<a href="/daftar"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/barang-masuk/simpan" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jumlah<input type="number" name="jumlah" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>