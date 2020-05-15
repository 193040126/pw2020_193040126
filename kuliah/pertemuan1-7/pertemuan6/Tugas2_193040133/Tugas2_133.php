<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040133</title>
		<style type="text/css">
			.header {
				background-color: grey;
			}
			.font {
				text-align: center;
			}
			img {
				width: 200px;
			} 
			table {
				text-align: center;
			}

		</style>
</head>
	<body>
		<h1>Daftar Mobil</h1>

		<?php 
			$Mobil = array(
			array("<img src = 'img133/altis.jpg'>", "corrolla altis", "toyota", "2018", "579.600.000"),
			array("<img src = 'img133/avansa.jpg'>", "avanza", "toyota", "2017","227.300.000"),
			array("<img src = 'img133/crv.jpg'>", "CRV", "honda", "2019", "539.400.000"),
			array("<img src = 'img133/ertiga.jpg'>", "ertiga", "suzuki", "2018", "260.500.000"),
			array("<img src = 'img133/ignis.jpg'>", "ignis", "suzuki", "2019", "186.000.000"),
			array("<img src = 'img133/yaris.jpg'>", "yaris", "toyota", "2018", "287.450.000"),
			array("<img src = 'img133/jazz.jpg'>", "jazz", "honda", "2017", "292.500.000"),
			array("<img src = 'img133/livina.jpg'>", "livina", "nissan", "2019", "272.100.000"),
			array("<img src = 'img133/mobilio.jpg'>", "mobilio", "honda", "2019", "259.000.000"),
			array("<img src = 'img133/terios.jpg'>", "terios", "daihatsu", "2019", "268.850.000")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="pink">
				<div class="font">
					<td><h3>Foto</h3></td>
					<td><h3>Nama mobil</h3></td>
					<td><h3><center>Merk mobil</center></h3></td>
					<td><h3>Tahun keluar</h3></td>
					<td><h3>Harga</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $Mobil[0][0] ?></td>
					<td><?php echo $Mobil[0][1] ?></td>
					<td><?php echo $Mobil[0][2] ?></td>
					<td><?php echo $Mobil[0][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[1][0] ?></td>
					<td><?php echo $Mobil[1][1] ?></td>
					<td><?php echo $Mobil[1][2] ?></td>
					<td><?php echo $Mobil[1][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[2][0] ?></td>
					<td><?php echo $Mobil[2][1] ?></td>
					<td><?php echo $Mobil[2][2] ?></td>
					<td><?php echo $Mobil[2][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[3][0] ?></td>
					<td><?php echo $Mobil[3][1] ?></td>
					<td><?php echo $Mobil[3][2] ?></td>
					<td><?php echo $Mobil[3][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[4][0] ?></td>
					<td><?php echo $Mobil[4][1] ?></td>
					<td><?php echo $Mobil[4][2] ?></td>
					<td><?php echo $Mobil[4][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[5][0] ?></td>
					<td><?php echo $Mobil[5][1] ?></td>
					<td><?php echo $Mobil[5][2] ?></td>
					<td><?php echo $Mobil[5][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[6][0] ?></td>
					<td><?php echo $Mobil[6][1] ?></td>
					<td><?php echo $Mobil[6][2] ?></td>
					<td><?php echo $Mobil[6][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[7][0] ?></td>
					<td><?php echo $Mobil[7][1] ?></td>
					<td><?php echo $Mobil[7][2] ?></td>
					<td><?php echo $Mobil[7][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[8][0] ?></td>
					<td><?php echo $Mobil[8][1] ?></td>
					<td><?php echo $Mobil[8][2] ?></td>
					<td><?php echo $Mobil[8][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Mobil[9][0] ?></td>
					<td><?php echo $Mobil[9][1] ?></td>
					<td><?php echo $Mobil[9][2] ?></td>
					<td><?php echo $Mobil[9][3] ?></td>
					<td><?php echo "Rp. ".$Mobil[9][4] ?></td>
				</tr>
			
		</table>
	</body>
</html>

		