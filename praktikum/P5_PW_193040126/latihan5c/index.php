<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html>

<head>
	<button type="submit" style="background-color: maroon; font-weight: 900;"><a href="../p5.php" style=" color: white; text-decoration: none;">KEMBALI KE HALAMAN PERTEMUAN 5</a></button>
	<title>Latihan 5c</title>
	<style type="text/css">
		img {
			width: 200px;
			height: 300px;
		}
	</style>
</head>

<body>
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