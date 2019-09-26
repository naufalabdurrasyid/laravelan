<!DOCTYPE html>
<html>
<head>
	<title>Daftar Stok Final Database</title>
</head>
<body>

	<h2>List Stok</h2>
	<h3>Stok</h3>

	<a href="/daftar"> + Tambah Barang Masuk</a>
	
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
				<a href="/daftar/edit/{{ $b->no_id }}">Edit</a>
				|
				<a href="/daftar/hapus/{{ $b->no_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>