<!DOCTYPE html>
<html>
<head>
	<title>barang masuk</title>
</head>
<body>
 
	<h1>barang masuk</h1>
	<a href="https://kumparan.com/muhammad-abdurrasyid">data</a>
    <p>Nama: {{ $nama }}</p>
    <p>Stok Tersedia</p>
	<ul>
 
		@foreach($barang as $b)
 
		<li>{{ $b }}</li>
 
		@endforeach
		
	</ul>
</body>
</html>