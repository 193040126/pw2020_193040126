<?php
//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php

if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik where id = $id")[0];

?>
<!DOCTYPE html>
<html>

<head>
	<title>Latihan 6d</title>
</head>

<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $elektronik["foto"]; ?>" width="250" height="200">
		</div>
		<div class="keterangan">
			<p>Merk : <?= $elektronik["merk"]; ?></p>
			<p>Tipe : <?= $elektronik["tipe"]; ?></p>
			<p>Tahun Rilis : <?= $elektronik["tahun_rilis"]; ?></p>
			<p>Harga : <?= $elektronik["harga"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>

	</div>

</body>

</html>