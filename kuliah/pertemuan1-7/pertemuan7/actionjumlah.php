<?php 
	echo "ini adalah hasilnya";
	echo "<br>";

	function jumlah($angka1, $angka2){
	$hasil = $angka1 + $angka2;
			echo "$hasil";
		
	}
	$angka1 = $_GET['angka1'];
	$angka2 = $_GET['angka2'];
	jumlah($angka1, $angka2);


 ?>