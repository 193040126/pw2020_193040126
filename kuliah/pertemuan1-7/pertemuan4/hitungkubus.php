<?php 


	//inisialisasi variabel
	//kubus1
	$sisi1 = 9;

	//kubus2
	$sisi2 = 4 ;

	$luas1 = hitungluaskubus($sisi1);
	$luas2 = hitungluaskubus($sisi2);

	//luas ke 1
	// $luaskubus1 = $sisi1*$sisi1*6;

	// //luas ke 2
	// $luaskubus2 = $sisi2*$sisi2*6;


	// //total luas
	// $total_luas = $luaskubus2+$luaskubus1;


	// echo "luas kubus 1 = " . $luaskubus1;
	// echo "luas kubus 2 = " . $luaskubus2;
	// echo "total luas = " . $total_luas;

	echo "total luas = ".hitungluas2kubus($luas1, $luas2)."<br>";

	function  hitungluaskubus($sisi)
	{
		$luas = $sisi*$sisi*6;
		return $luas;
	}


	//hitung luas kubus
	

	function  hitungluas2kubus($luas1, $luas2)
	{
		$total_luas = $luas1+$luas2;
		return $total_luas;
	}




 ?>