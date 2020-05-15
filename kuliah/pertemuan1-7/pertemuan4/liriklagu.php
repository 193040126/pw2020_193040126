<?php 
$topi =	"topi saya bundar <br>
		bundar topi saya <br>
		kalau tidak bundar <br>
		bukan topi saya"; 


		$topi = str_replace("a", "o", $topi);
		$topi = str_replace("i", "o", $topi);
		$topi = str_replace("u", "o", $topi);
		$topi = str_replace("e", "o", $topi);

		echo "$topi";


 ?>