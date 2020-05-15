<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040126</title>
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
			tr{
				background-color: maroon;
			}
			

		</style>
</head>
	<body>
		<h1>Daftar Buku</h1>

		<?php 
			$Buku = array(
			array("<img src = 'img126/bukuperahu.jpg'>", "Perahu Kertas", "Dewi Lestari", "2009", "Bentang Pustaka"),
			array("<img src = 'img126/buku5cm.jpg'>", "5 CM", "Donny Dhirgantoro", "2005","Grasindo"),
			array("<img src = 'img126/bukubumi.jpg'>", "Bumi Manusia", "Pramoedya Ananta Toer", "1980", "Hasra Mitra"),
			array("<img src = 'img126/bukudear.jpg'>", "Dear Nathan", "Erisca Febriani", "2016", "Best Media"),
			array("<img src = 'img126/bukudilan.jpg'>", "Dilan 1990", "Pidi Baiq", "2014", "Pastel Books (Mizan Group)"),
			array("<img src = 'img126/bukudilan91.jpg'>", "Dilan 1991", "Pidi Baiq", "2015", "Pastel Books (Mizan Group)"),
			array("<img src = 'img126/bukumilea.jpg'>", "Milea : Suara dari dilan", "Pidi Baiq", "2016", "Pastel Books (Mizan Group)"),
			array("<img src = 'img126/bukusejarah.jpg'>", "Buku Pintar Sejarah Indonesia", "Tim Bina Karya SMK", "2017", "Indoeduka"),
			array("<img src = 'img126/bukulaskar.jpg'>", "Laskar Pelangi", "Andrea Hirata", "2005", "Bentang Pustaka"),
			array("<img src = 'img126/bukuebi.jpg'>", "Buku Lengkap EBI", "Firman Mulyanto S.Pd", "2017", "Laksana")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
			
				<tr>
				<div class="font">
					<td><h3>Foto</h3></td>
					<td><h3>Judul buku</h3></td>
					<td><h3><center>Penulis</center></h3></td>
					<td><h3>Tahun terbit</h3></td>
					<td><h3>Penerbit</h3></td>
				</div>
				</tr>
			
	
				<tr>
					<td><?php echo $Buku[0][0] ?></td>
					<td><?php echo $Buku[0][1] ?></td>
					<td><?php echo $Buku[0][2] ?></td>
					<td><?php echo $Buku[0][3] ?></td>
					<td><?php echo $Buku[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[1][0] ?></td>
					<td><?php echo $Buku[1][1] ?></td>
					<td><?php echo $Buku[1][2] ?></td>
					<td><?php echo $Buku[1][3] ?></td>
					<td><?php echo $Buku[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[2][0] ?></td>
					<td><?php echo $Buku[2][1] ?></td>
					<td><?php echo $Buku[2][2] ?></td>
					<td><?php echo $Buku[2][3] ?></td>
					<td><?php echo $Buku[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[3][0] ?></td>
					<td><?php echo $Buku[3][1] ?></td>
					<td><?php echo $Buku[3][2] ?></td>
					<td><?php echo $Buku[3][3] ?></td>
					<td><?php echo $Buku[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[4][0] ?></td>
					<td><?php echo $Buku[4][1] ?></td>
					<td><?php echo $Buku[4][2] ?></td>
					<td><?php echo $Buku[4][3] ?></td>
					<td><?php echo $Buku[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[5][0] ?></td>
					<td><?php echo $Buku[5][1] ?></td>
					<td><?php echo $Buku[5][2] ?></td>
					<td><?php echo $Buku[5][3] ?></td>
					<td><?php echo $Buku[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[6][0] ?></td>
					<td><?php echo $Buku[6][1] ?></td>
					<td><?php echo $Buku[6][2] ?></td>
					<td><?php echo $Buku[6][3] ?></td>
					<td><?php echo $Buku[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[7][0] ?></td>
					<td><?php echo $Buku[7][1] ?></td>
					<td><?php echo $Buku[7][2] ?></td>
					<td><?php echo $Buku[7][3] ?></td>
					<td><?php echo $Buku[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[8][0] ?></td>
					<td><?php echo $Buku[8][1] ?></td>
					<td><?php echo $Buku[8][2] ?></td>
					<td><?php echo $Buku[8][3] ?></td>
					<td><?php echo $Buku[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[9][0] ?></td>
					<td><?php echo $Buku[9][1] ?></td>
					<td><?php echo $Buku[9][2] ?></td>
					<td><?php echo $Buku[9][3] ?></td>
					<td><?php echo $Buku[9][4] ?></td>
				</tr>
			
		</table>
	</body>
</html>

		