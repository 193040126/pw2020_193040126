<?php
//melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
//memilih database
mysqli_select_db($conn, "tubes_193040126") or die("Database salah!");
//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Latihan 5a</title>
	<style type="text/css">
		img {
			width: 200px;
			height: 300px;
		}
	</style>
</head>

<body>
	<h2>Daftar Barang Elektronik Toko Pecah Barang</h2>

	<div class="container">
		<table border="1" cellspacing="0" cellpadding="10">
			<tr bgcolor="maroon" align="center">
				<td><b>NO</b></td>
				<td><b>FOTO</b></td>
				<td><b>MERK</b></td>
				<td><b>TIPE</b></td>
				<td><b>TAHUN RILIS</b></td>
				<td><b>HARGA</b></td>
			</tr>

			<?php $i = 1 ?>
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $row["foto"]; ?>"></td>
					<td><?= $row["merk"] ?></td>
					<td><?= $row["tipe"] ?></td>
					<td><?= $row["tahun_rilis"] ?></td>
					<td><?= $row["harga"] ?></td>
				</tr>
				<?php $i++ ?>
			<?php endwhile; ?>

		</table>
	</div>
</body>

</html>