<!DOCTYPE html>
<html>
<head>
	<title>latihan 4 c</title>
</head>
<body>
	<h3><b>Macam-macam perangkat keras komputer dan fungsinya</b></h3>


	<?php 
 		$hardware = array();

 		$hardware["Motherboard"] = "Papan Sirkuit komponen komputer" ;
 		$hardware["Processor"] = "Sebuah IC yang mengontrol seluruh jalannya sistem komputer" ;
 		$hardware["Hard Disk"] = "Media penyimpanan sekunder" ;
 		$hardware["PC Coller"] = "Mengurangi panas yang dihasilkan oleh komputer" ;
 		$hardware["VGA Card"] = "Mengolah data grafik yang akan ditampilkan oleh monitor" ;
 		$hardware["Optical Drive"] = "Membaca, maupun menulis data dari kepingan CD" ;
 		$hardware["Card Reader"] = "Untuk membaca data-data yang tersimpan didalam memory card" ;
 		$hardware["Modem"] = "Mengubah sinyal digital menjadi sinyal analog" ;

 	 ?>

 	 <ol>
 	 	<?php 
 	 	echo "<table border = 0 cellspacing = 2 cellpadding = 2>";
			foreach ($hardware as $hw => $disk) {
			echo "<tr><td> <b>$hw</b><td> : <td>$disk</td></td></td></tr>";	
						
			}

 	 	 ?>
 	 </ol>

 	 

</body>
</html>