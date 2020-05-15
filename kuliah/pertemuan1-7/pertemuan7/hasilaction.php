<?php 
	echo "nama saya ipin";
	echo "<hr>";

	// echo "username = " . $_GET['username'];
	// echo "<br>";
	// echo "password = " . $_GET['password'];

	//fungsi
	function ceklogin($username, $password){
		if ($username == "diva" && $password == "anjay") {
			echo "masuk bray";
		} else{
			echo "dek kamana atuh bray";
		}
	}

	//eksekusi fungsi
	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username, $password);
 ?>