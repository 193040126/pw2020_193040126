<?php 
	
	$PHI = 3.14;
	$jari1 = 10;
	$jari2 = 15;
	

	$luas1 = hitungluaslingkaran($PHI, $jari1);
	$luas2 = hitungluaslingkaran($PHI, $jari2);

	echo " total_luas_2_lingkaran = ".hitungluas2lingkaran($luas1, $luas2)."<br>";
	echo "total luas 1 = ".hitungluaslingkaran($PHI, $jari1);


	function hitungluas2lingkaran($luas1, $luas2)
	{
		$total_luas = $luas1 + $luas2;
		return $total_luas;
	}

	function hitungluaslingkaran($phi, $jari)
	{
		$luas = $phi*$jari*$jari;
		return $luas; 
	}


 ?>