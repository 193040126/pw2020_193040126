<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

//tombol cari ditekan
if (isset($_POST["cari"])) {
	$elektronik = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Latihan 7b</title>
	<style type="text/css">
		img {
			width: 200px;
			height: 300px;
		}
	</style>
</head>

<body>
	<div class="in">
		<a href="php/login.php"><button>Masuk Ke Halaman Admin</button></a>
	</div> <br>

	<form action="" method="POST">
		<input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<br>
	<?php if (empty($elektronik)) : ?>
		<tr>
			<td colspan="7">
				<h1>Data Tidak Ditemukan</h1>
			</td>
		</tr>
	<?php else : ?>
	<?php endif; ?>

	<br>
	<div class="container">
		<?php foreach ($elektronik as $elek) : ?>
			<p class="tipe">
				<a href="php/detail.php?id=<?= $elek['id'] ?>">
					<?= $elek["tipe"]  ?>
				</a>
			</p>

		<?php endforeach; ?>


	</div>
</body>

</html>