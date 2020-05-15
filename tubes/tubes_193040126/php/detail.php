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
	<title>Halaman Detail</title>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="../css/detail.css">

</head>

<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $elektronik["foto"]; ?>" width="250" height="300">
		</div>
		<div class="keterangan">
			<p>Merk : <?= $elektronik["merk"]; ?></p>
			<p>Tipe : <?= $elektronik["tipe"]; ?></p>
			<p>Tahun Rilis : <?= $elektronik["tahun_rilis"]; ?></p>
			<p>Harga : Rp.<?= $elektronik["harga"]; ?>,-</p>
		</div>

		<button class="tombol-kembali"><a href="../index.php" style="font-weight: 900; text-decoration: none; color: maroon;">KEMBALI</a></button>

	</div>

</body>

</html>