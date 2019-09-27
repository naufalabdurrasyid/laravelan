<!DOCTYPE html>
<html>
<head><title>Naufalrasyid Logistik</title>
</head>
<body>
    <h2>Penambahan Data Barang Masuk</h2>
	<a href="/daftar"> Kembali</a>
	
	<br/>

	@foreach($barang_masuk as $b)
	<form action="/barang-masuk/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->no_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $b->nama }}"> <br/>
		Jumlah <input type="text" required="required" name="jumlah" value="{{ $b->jumlah }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>