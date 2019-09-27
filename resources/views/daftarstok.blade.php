<!DOCTYPE html>
<html>
<head>
	<title>Naufalrasyid Logistik</title>
</head>
<body>

	<h2>List Barang Masuk</h2>
	<a href="/">Kembali ke Halaman Utama</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Tanggal</th>
		
		</tr>
		@foreach($barang_masuk as $b)
		<tr>
			<td>{{ $b->no_id }}</td>
			<td>{{ $b->nama }}</td>
			<td>{{ $b->jumlah }}</td>
			<td>{{ $b->tanggal }}</td>
			<td>
				<a href="/barang-masuk/edit/{{ $b->no_id }}">Edit</a>
				|
				<a href="/barang-masuk/delete/{{ $b->no_id }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	
	<a href="/barang-masuk/tambah"> + Tambah Barang Masuk</a>

</body>
</html>