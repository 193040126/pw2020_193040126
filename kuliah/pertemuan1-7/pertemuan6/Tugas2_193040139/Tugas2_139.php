<!DOCTYPE html>
<html>
<head>
	<title>193040139</title>
	<style>
		.head {
			background-color: grey;
		}
		img {
			width: 150px;
		}

	</style>
</head>
<body>
	<h1>Daftar Smartphone</h1>
	<?php 
	$smartphone = array(
		array("<img src = 'img139/ipxr.jpg'>", "Apple", "Iphone XR", "Chipset: Apple A12 Bionic
			Kamera Belakang: 12MP<br>
			Kamera Depan: 7MP<br>
			Ukuran Layar: 6.1 Inch<br>
			Baterry: 2942 mAh<br>
			Sistem Operasi: iOS 12<br>", "17.699.000"),
		array("<img src = 'img139/ip7.jpg'>", "Apple", "Iphone 7 plus", "Chipset: Apple A10 Quad-core 2.34 GHz<br>
			Kamera Belakang: 12MP+7MP<br>
			Kamera Depan: 7MP<br>
			Ukuran Layar: 5.5 Inch<br>
			Baterry: 2900 mAh,","13.999.000"),
		array("<img src = 'img139/2.s70.jpg'>", "SAMSUNG", "A50", "Processor: Exynos 7885 Octa-Core 2.2GHz<br>
				Ukuran Layar: 6.0 inch FHD+<br>
			Kamera Belakang: 24MP+8MP+5MP<br>
			Kamera Depan: 24MP<br>
			Fingerprint<br>
			Baterai: 3300 mAh<br>
			Sistem Operasi: Android 8.0 Oreo", "3.999.000"),
		array("<img src = 'img139/xiami n8.jpg'>", "Xiaomi", "Note8", "Chipset: Snapdragon 665 Octa-Core<br>
			Kamera Belakang: 48MP + 8MP + 2MP + 2MP<br>
			Kamera Depan: 13MP<br>
			Ukuran Layar: 6.3 Inch<br>
			Battery : 4000 mAh<br>
			Sistem Operasi: Android 9.0", " 2.499.000"),
		array("<img src = 'img139/nokia.jpg'>", "Nokia", "6.1 plus", "processor: Qualcomm SDM636 Snapdragon 636 Octa-core 1.8 GHz Kryo 260<br>
			Ukuran Layar: 5.8 inch<br>
			Kamera Belakang: 16 MP+ 5 MP<br>
			Kamera Depan: 16 MP<br>
			Baterai: 3060 mAh<br>
			Dual SIM<br>
			Fingerprint<br>
			Android OS: Android 8.1 Oreo", "3.399.000"),
		array("<img src = 'img139/huawei.jpg'>", "Huawei", "P30 pro", "Processor: HiSilicon Kirin 980 Octa-core <br>(2x2.6 GHz Cortex-A76 & 2x1.92 GHz Cortex-A76 & 4x1.8 GHz Cortex-A55)<br>
			Kamera Belakang: 40MP+20MP + 8MP<br>
			Kamera Depan: 32MP<br>
			Ukuran Layar: 6.47 inch FHD+<br>
			Baterai: 4200 mAh<br>
			Sistem Operasi: Android 9.0 Pie", "11.818.800"),
		array("<img src = 'img139/opporeno2.jpg'>", "OPPO", "Reno2", "chipset: Snapdragon 730G<br>
			Kamera Belakang: 48MP + 13MP + 8MP + 2MP<br>
			Kamera Depan: 16MP<br>
			Ukuran Layar: 6.5 Inch<br>
			Battery: 4000 mAh<br>
			Sistem Operasi: Android 9.0 (Pie)", " 9.141.120"),
		array("<img src = 'img139/vivo.jpg'>", "Vivo", "Y95", "Chipset: Snapdragon 439<br>
			Kamera Depan: 20MP<br>
			Kamera Belakang: 13MP & 2MP<br>
			Ukuran Layar: 6.22 Inch<br>
			Battery: 4030 mAh<br>
			Sistem Operasi: Android Oreo 8.1", "2.699.000"),
		array("<img src = 'img139/oppoa7.jpg'>", "OPPO", "A71", "
			Processor: Qualcomm Snapdragon 450<br>
			Kamera Belakang: 13MP<br> Kamera Depan: 5MP<br>
			Ukuran Layar: 5.2 inch<br>
			SIM: Dual Nano SIM Cards<br>
			Battery: 3000 mAh<br>
			Sistem Operasi: Android 7.1 (Nougat)","1.899.000" ),
		array("<img src = 'img139/honor7x.jpg'>", "Honor", "Honor 7x", "Processor: HiSilicon Kirin 659<br>
			Kamera Belakang: 16MP + 2MP<br>
			Kamera Depan: 8MP<br>
			Ukuran Layar: 5.93 inch<br>
			Sistem Operasi: Android 7.0", "3.299.000")
);


	 ?>
	 			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr bgcolor="grey">
					<th>Foto</th>
					<th>Nama vendor</th>
					<th>Tipe Smartphone</th>
					<th>Spesifikasi</th>
					<th>Harga</th>
				</tr>
	
				<tr>
					<td><?php echo $smartphone[0][0] ?></td>
					<td><?php echo $smartphone[0][1] ?></td>
					<td><?php echo $smartphone[0][2] ?></td>
					<td><?php echo $smartphone[0][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[1][0] ?></td>
					<td><?php echo $smartphone[1][1] ?></td>
					<td><?php echo $smartphone[1][2] ?></td>
					<td><?php echo $smartphone[1][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[2][0] ?></td>
					<td><?php echo $smartphone[2][1] ?></td>
					<td><?php echo $smartphone[2][2] ?></td>
					<td><?php echo $smartphone[2][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[3][0] ?></td>
					<td><?php echo $smartphone[3][1] ?></td>
					<td><?php echo $smartphone[3][2] ?></td>
					<td><?php echo $smartphone[3][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[4][0] ?></td>
					<td><?php echo $smartphone[4][1] ?></td>
					<td><?php echo $smartphone[4][2] ?></td>
					<td><?php echo $smartphone[4][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[5][0] ?></td>
					<td><?php echo $smartphone[5][1] ?></td>
					<td><?php echo $smartphone[5][2] ?></td>
					<td><?php echo $smartphone[5][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[6][0] ?></td>
					<td><?php echo $smartphone[6][1] ?></td>
					<td><?php echo $smartphone[6][2] ?></td>
					<td><?php echo $smartphone[6][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[7][0] ?></td>
					<td><?php echo $smartphone[7][1] ?></td>
					<td><?php echo $smartphone[7][2] ?></td>
					<td><?php echo $smartphone[7][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[8][0] ?></td>
					<td><?php echo $smartphone[8][1] ?></td>
					<td><?php echo $smartphone[8][2] ?></td>
					<td><?php echo $smartphone[8][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $smartphone[9][0] ?></td>
					<td><?php echo $smartphone[9][1] ?></td>
					<td><?php echo $smartphone[9][2] ?></td>
					<td><?php echo $smartphone[9][3] ?></td>
					<td><?php echo "Rp. ".$smartphone[9][4] ?></td>
				</tr>
			
		</table>
</body>
</html>