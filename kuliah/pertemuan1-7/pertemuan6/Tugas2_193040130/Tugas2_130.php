<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040130</title>
		<style type="text/css">
			.header {
				background-color: almond;
			}
			.font {
				text-align: center;
			}
			img {
				width: 500px;
			} 
			table {
				text-align: center;
			}

		</style>
</head>
	<body>
		<h1>Daftar Barang Elektronik (193040130)</h1>

		<?php 
			$Elektronik = array(
			array("<img src = 'img130/Predator 21 X.jpg'>", "Acer", "Predator 21 X", "2017", "149.600.000"),
			array("<img src = 'img130/Samsung fold.jpg'>", "Samsung", "Samsung fold ", "2019","31.000.000"),
			array("<img src = 'img130/Asus ROG Zephyrus GX701.jpg'>", "Asus", "Asus ROG Zephyrus GX701", "2019", "57.400.000"),
			array("<img src = 'img130/iphone 11 pro max.jpg'>", "Iphone", "Iphone 11 pro max", "2019", "20.500.000"),
			array("<img src = 'img130/Sony PlayStation 4 Pro.jpg'>", "Sony", "Sony PlayStation 4 Pro", "2013", "6.000.000"),
			array("<img src = 'img130/Dell UP3218K UltraSharp.jpg'>", "Dell", "Dell UP3218K UltraSharp", "2017", "66.000.000"),
			array("<img src = 'img130/Dell Alienware 17.jpg'>", "Dell", "Dell Alienware 17", "2018", "25.000.000"),
			array("<img src = 'img130/Sony Playstation VR.jpg'>", "Sony", "Sony Playstation VR", "2016", "4.000.000"),
			array("<img src = 'img130/Razer Kraken PRO V2.jpg'>", "Razer", "Razer Kraken PRO V2", "2016", "1.450.000"),
			array("<img src = 'img130/SteelSeries Rival 110.jpg'>", "SteelSeries", "SteelSeries Rival 110", "2017", "850.000")
	
			);	

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="BlanchedAlmond">
				<div class="font">
					<td><h3>Photo</h3></td>
					<td><h3>Company</h3></td>
					<td><h3><center>Type</center></h3></td>
					<td><h3>Release Date</h3></td>
					<td><h3>Pricelist</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $Elektronik[0][0] ?></td>
					<td><?php echo $Elektronik[0][1] ?></td>
					<td><?php echo $Elektronik[0][2] ?></td>
					<td><?php echo $Elektronik[0][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[1][0] ?></td>
					<td><?php echo $Elektronik[1][1] ?></td>
					<td><?php echo $Elektronik[1][2] ?></td>
					<td><?php echo $Elektronik[1][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[2][0] ?></td>
					<td><?php echo $Elektronik[2][1] ?></td>
					<td><?php echo $Elektronik[2][2] ?></td>
					<td><?php echo $Elektronik[2][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[3][0] ?></td>
					<td><?php echo $Elektronik[3][1] ?></td>
					<td><?php echo $Elektronik[3][2] ?></td>
					<td><?php echo $Elektronik[3][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[4][0] ?></td>
					<td><?php echo $Elektronik[4][1] ?></td>
					<td><?php echo $Elektronik[4][2] ?></td>
					<td><?php echo $Elektronik[4][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[5][0] ?></td>
					<td><?php echo $Elektronik[5][1] ?></td>
					<td><?php echo $Elektronik[5][2] ?></td>
					<td><?php echo $Elektronik[5][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[6][0] ?></td>
					<td><?php echo $Elektronik[6][1] ?></td>
					<td><?php echo $Elektronik[6][2] ?></td>
					<td><?php echo $Elektronik[6][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[7][0] ?></td>
					<td><?php echo $Elektronik[7][1] ?></td>
					<td><?php echo $Elektronik[7][2] ?></td>
					<td><?php echo $Elektronik[7][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[8][0] ?></td>
					<td><?php echo $Elektronik[8][1] ?></td>
					<td><?php echo $Elektronik[8][2] ?></td>
					<td><?php echo $Elektronik[8][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Elektronik[9][0] ?></td>
					<td><?php echo $Elektronik[9][1] ?></td>
					<td><?php echo $Elektronik[9][2] ?></td>
					<td><?php echo $Elektronik[9][3] ?></td>
					<td><?php echo "Rp. ".$Elektronik[9][4] ?></td>
				</tr>
			
		</table>
	</body>
</html>

		