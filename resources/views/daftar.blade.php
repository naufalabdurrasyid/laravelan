<!DOCTYPE html>
<html>
<head>
	<title>Pencatatan Barang Masuk</title>
</head>
<body>
 
	<form action="/catat/barang-masuk" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama Barang:
		<input type="text" name="nama"> <br/>
		Quantity:
		<input type="number" name="jumlah"> <br/>

		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>