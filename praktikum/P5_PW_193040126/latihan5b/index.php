<?php 
	//menghubungkan dengan file php lainnya
	require 'php/functions.php';

	//melakukan query
	$elektronik = query("SELECT * FROM elektronik");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5b</title>
	<style type="text/css">
		img{
			width: 200px;
			height: 300px;
		}
		
	</style>
</head>
<body>
	<h2>Daftar Barang Elektronik Toko Pecah Barang</h2>

	<div class="container">
		<table border="1" cellspacing="0" cellpadding="10">
			<tr bgcolor="maroon" align="center" >
				<td><b>NO</b></td>
				<td><b>FOTO</b></td>
				<td><b>MERK</b></td>
				<td><b>TIPE</b></td>
				<td><b>TAHUN RILIS</b></td>
				<td><b>HARGA</b></td>
			</tr>

			<?php $i = 1 ?>
			<?php foreach ($elektronik as $elek) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $elek["foto"]; ?>"></td>
					<td><?= $elek["merk"] ?></td>
					<td><?= $elek["tipe"] ?></td>
					<td><?= $elek["tahun rilis"] ?></td>
					<td><?= $elek["harga"] ?></td>
				</tr>
			<?php $i++ ?>
			<?php endforeach; ?>

		</table> 
	</div>
</body>
</html>s