<?php 

	//Array 1 dimensi
	$arah = array("kanan", "kiri");
	$arah[2] = "atas";
	$arah[] = "bawah";

	//untuk mengubah kiri menjadi indeks 0 (asalnya 1) di array
	$arah[0] = "kiri";
	$arah[1] = "kanan";  


	//untuk mengetahui panjang si array nya
	echo "Panjang Array = " .count($arah) ;
	echo "<br>";
	echo "<br>";

	// echo $arah;

	print_r($arah);
	echo "<br>";


	for ($i=0; $i < count($arah); $i++) { 
		echo "Arah = " . $arah[$i];
		echo "<br>";
		echo "<br>";
	}

	echo "<br>";
	foreach ($arah as $namaarah) {
		echo $namaarah;
	}

	//Array multidimensi 
	$mahasiswa = array();
	$mahasiswa [0][0] = "193040126";
	$mahasiswa [0][1] = "Diva Amwal";
	$mahasiswa [1][0] = "Bandung";
	$mahasiswa [1][1] = "0895324231084";

	//biar rapih hasilnya
	// print("<pre>" . print_r($mahasiswa, true). "</pre>") ;

	//menampilkan hasil biasa ajjh
	// print_r($mahasiswa);

	//menampilkan spesifikasi lengkap dari array yang ingin ditampilkan
	// var_dump($mahasiswa);

	// for ($i=0; $i < count($mahasiswa) ; $i++) { 
	// 	for ($j=0; $j < 2 ; $j++) { 
	// 		echo $mahasiswa[$i][$j];
	// 		echo "<br>";
	// 	}
	// }

 ?>