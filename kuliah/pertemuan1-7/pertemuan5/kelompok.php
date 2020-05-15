<?php 

	$bulan = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember");


	//menampilkan array nya
	// print_r($bulan);
	// echo "<br>";
	// echo "Panjang Array bulan = " . count($bulan);

	//mencari salah satu nama bulan
	// echo $bulan[6];

	$angka = array(1,2,3,4,5,6);

	$hasil = array_push($angka, 10,9,8,7);
	print_r($angka);
	echo "<hr>";
	
	$hasil = rsort($angka);
	print_r($angka);
	echo "<hr>";

	$hasil = sort($angka);
	print_r($angka);
	



 ?>