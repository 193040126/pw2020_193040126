<?php 
$balon = "balonku ada lima <br>
		  rupa rupa warnanya <br>
		  hijau kuning kelabu merah muda dan biru <br>
		  meletus balon hijau duar nmax <br>
		  hatiku sangat kacau <br>
		  balonku tinggal empat <br>
		  ku pegang erat erat";


		$balon = str_replace("a", "<b>o</b>", $balon);
		$balon = str_replace("i", "<b>o</b>", $balon);
		$balon = str_replace("u", "<b>o</b>", $balon);
		$balon = str_replace("e", "<b>o</b>", $balon);

		echo "$balon";

 ?>