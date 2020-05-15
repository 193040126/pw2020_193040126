<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040115</title>
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
		<h1>Daftar Barang Elektonik</h1>

		<?php 
			$elek = array(
			array("<img src = 'img115/hairdryer.jpg'>" , "hairdryer"	, "Philips"		, "untuk mengeringkan rambut", "579.600"),
			array("<img src = 'img115/dispenser.jpg'>" , "dispenser"	, "Sanken"		, "untuk Wadah air dati dlm galon. bisa jg nntinya airnya disajikan dgn keadaan panas. buat bikin minuman.","1.227.300"),
			array("<img src = 'img115/keyboard.jpg'>"	, "keyboard"	, "Steelseries" , "Sbg alat ketik,yang bertugas untuk menampilkan angka, huruf, dan simbol pada layar monitor komputer Anda yang kemudian ditampilkan menjadi dokumen atau memang sengaja dibuat sebagai data digital di komputer", "1.539.400"),
			array("<img src = 'img115/rice.jpg'>"	  	,  "rice"		, "Philips"		, "untuk memasak atau menanak nasi (Cooking)", "260.500.000"),
			array("<img src = 'img115/ps4.jpg'>"	  	,  "Ps4"		, "Sony"		, "untuk kebutuhan hiburan", "3.186.000"),
			array("<img src = 'img115/macbook.jpg'>" 	, "Macbook"		, "Apple"		, "sebagai media yang sangat membantu rutinitas pekerjaan seseorang,", "5.287.450."),
			array("<img src = 'img115/proyektor.jpg'>" , "Proyektor"	, "Hp"			, "untuk menampilkan video, gambar, atau data dari komputer pada sebuah layar", "445.500."),
			array("<img src = 'img115/ac.jpg'>"		, "ac"   		, "Samsung"		, "sebagai alat yang digunakan untuk mendinginkan ruangan, sesuai dengan suhu yang diinginkan", "2.272.100."),
			array("<img src = 'img115/monitor.jpg'>"   , "Monitor" 	, "Samsung"		, "sebagai Output dari memori komputer atau central processing unit berupa biner", "4.359.000."),
			array("<img src = 'img115/kulkas.jpg'>"    , "Kulkas"  	, "Samsung"	, "dapat mendinginkan dan membekukan, dan dapat mengawetkan makanan", "3.268.850.000")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="grey">
				<div class="font">
					<td><h3>Foto</h3></td>
					<td><h3>Nama Barang</h3></td>
					<td><h3><center>Merk Barang</center></h3></td>
					<td><h3>Fungsi</h3></td>
					<td><h3>Harga</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $elek[0][0] ?></td>
					<td><?php echo $elek[0][1] ?></td>
					<td><?php echo $elek[0][2] ?></td>
					<td><?php echo $elek[0][3] ?></td>
					<td><?php echo "Rp. ".$elek[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[1][0] ?></td>
					<td><?php echo $elek[1][1] ?></td>
					<td><?php echo $elek[1][2] ?></td>
					<td><?php echo $elek[1][3] ?></td>
					<td><?php echo "Rp. ".$elek[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[2][0] ?></td>
					<td><?php echo $elek[2][1] ?></td>
					<td><?php echo $elek[2][2] ?></td>
					<td><?php echo $elek[2][3] ?></td>
					<td><?php echo "Rp. ".$elek[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[3][0] ?></td>
					<td><?php echo $elek[3][1] ?></td>
					<td><?php echo $elek[3][2] ?></td>
					<td><?php echo $elek[3][3] ?></td>
					<td><?php echo "Rp. ".$elek[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[4][0] ?></td>
					<td><?php echo $elek[4][1] ?></td>
					<td><?php echo $elek[4][2] ?></td>
					<td><?php echo $elek[4][3] ?></td>
					<td><?php echo "Rp. ".$elek[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[5][0] ?></td>
					<td><?php echo $elek[5][1] ?></td>
					<td><?php echo $elek[5][2] ?></td>
					<td><?php echo $elek[5][3] ?></td>
					<td><?php echo "Rp. ".$elek[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[6][0] ?></td>
					<td><?php echo $elek[6][1] ?></td>
					<td><?php echo $elek[6][2] ?></td>
					<td><?php echo $elek[6][3] ?></td>
					<td><?php echo "Rp. ".$elek[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[7][0] ?></td>
					<td><?php echo $elek[7][1] ?></td>
					<td><?php echo $elek[7][2] ?></td>
					<td><?php echo $elek[7][3] ?></td>
					<td><?php echo "Rp. ".$elek[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[8][0] ?></td>
					<td><?php echo $elek[8][1] ?></td>
					<td><?php echo $elek[8][2] ?></td>
					<td><?php echo $elek[8][3] ?></td>
					<td><?php echo "Rp. ".$elek[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $elek[9][0] ?></td>
					<td><?php echo $elek[9][1] ?></td>
					<td><?php echo $elek[9][2] ?></td>
					<td><?php echo $elek[9][3] ?></td>
					<td><?php echo "Rp. ".$elek[9][4] ?></td>
				</tr>
			
		</table>
	</body>
</html>

		