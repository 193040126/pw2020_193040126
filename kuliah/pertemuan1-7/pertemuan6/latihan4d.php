<!DOCTYPE html>
<html>
<head>
	<title>latihan 4 d</title>
</head>
<body>
<?php 
	$perangkat = array(
		array("Motherboard", "Papan sirkuit komponen komputer", 500000, 200000),
		array("Processor", "Sebuah IC yang mengontrol seluruh jalannya sistem komputer",300000, 200000),
		array("Hard Disk", "Media penyimpanan sekunder",800000, 500000),
		array("PC Coller", "Mengurangi panas yang dihasilkan oleh komputer",200000,100000),
		array("VGA Card", "Mengubah data grafik yang akan ditampilkan oleh monitor", 900000, 800000),
		array("Optical drive", "Membaca, maupun menulis data dari kepingan CD",500000, 300000),
		array("Card Reader", "Untuk membaca data-data yang tersimpan dalam memory card",10000,5000),
		array("Modem", "Mengubah sinyal digital menjadi sinyal analog", 200000, 150000)
	);
 ?>
 <table border="2px solid black" cellpadding="3" cellspacing="0">
 		
 			<th>No</th>
 			<th>Nama perangkat</th>
 			<th>Fungsi</th>
 			<th>Harga Baru</th>
 			<th>Harga lama</th>
 
<tr>
	<td>1</td>
	<td><?php echo $perangkat[0][0]; ?></td>
	<td><?php echo $perangkat[0][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[0][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[0][3]; ?></td>
</tr>
<tr>
	<td>2</td>
	<td><?php echo $perangkat[1][0]; ?></td>
	<td><?php echo $perangkat[1][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[1][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[1][3]; ?></td>
</tr>
<tr>
	<td>3</td>
	<td><?php echo $perangkat[2][0]; ?></td>
	<td><?php echo $perangkat[2][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[2][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[2][3]; ?></td>
</tr>
<tr>
	<td>4</td>
	<td><?php echo $perangkat[3][0]; ?></td>
	<td><?php echo $perangkat[3][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[3][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[3][3]; ?></td>
</tr>
<tr>
	<td>5</td>
	<td><?php echo $perangkat[4][0]; ?></td>
	<td><?php echo $perangkat[4][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[4][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[4][3]; ?></td>
</tr>
<tr>
	<td>6</td>
	<td><?php echo $perangkat[5][0]; ?></td>
	<td><?php echo $perangkat[5][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[5][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[5][3]; ?></td>
</tr>
<tr>
	<td>7</td>
	<td><?php echo $perangkat[6][0]; ?></td>
	<td><?php echo $perangkat[6][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[6][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[6][3]; ?></td>
</tr>
<tr>
	<td>8</td>
	<td><?php echo $perangkat[7][0]; ?></td>
	<td><?php echo $perangkat[7][1]; ?></td>
	<td><?php echo "Rp. ".$perangkat[7][2]; ?></td>
	<td><?php echo "Rp. ".$perangkat[7][3]; ?></td>
</tr>
<tr>
	<td>#</td>
	<td colspan="2"align = "center">jumlah</td>
	<td>
		<?php 
			$total= 0;
			foreach ($perangkat as $item => $harga) {
				$total += $harga[2];
			}

			echo "Rp. ".$total;
	 ?></td>
	<td>
		<?php 
			$total= 0;
			foreach ($perangkat as $item => $harga) {
				$total += $harga[3];
			}

			echo "Rp. ".$total;
	 ?>
	</td>
</tr>
 </table>
</body>
</html>