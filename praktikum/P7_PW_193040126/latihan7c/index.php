<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");



?>

<!DOCTYPE html>
<html>

<head>
	<title>Latihan 7c</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- my css -->
	<link rel="stylesheet" href="css/index.css">
</head>

<body class="black">
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="red darken-4">
			<div class="container">
				<div class="nav-wrapper">
					<a href=" " class="brand-logo">KOC-ELEKTRONIKA</a>
					<a href="index.php" data-target="mobile-nav" class="sidenav-trigger"></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li style="border: 1px solid black; background-color: navy;color: white; border-radius: 30%"><a href="php/login.php">LOGIN ADMIN</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>



	<!-- cari -->



	<br>

	<!-- sidenav -->
	<ul class="sidenav" id="mobile-nav">
		<li><a href="php/login.php">ADMIN</a></li>
	</ul>

	<!-- slider -->
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="assets/img/acerpre1.jpg">
				<div class="caption right-align">
					<h3>Toko Termurah</h3>
					<h5 class="light grey-text text-lighten-3">Barang Termewah</h5>
				</div>
			</li>
			<li>
				<img src="assets/img/ps5.jpg">
				<div class="caption left-align">
					<h3>Toko Termurah</h3>
					<h5 class="light grey-text text-lighten-3">Barang Termewah</h5>
				</div>
			</li>
			<li>
				<img src="assets/img/ip11.jpeg">
				<div class="caption left-align">
					<h3>Toko Termurah</h3>
					<h5 class="light grey-text text-lighten-3">Barang Termewah</h5>
				</div>
			</li>
		</ul>
	</div>
	<br>



	<br>
	<div class="container2 center">
		<?php foreach ($elektronik as $elek) : ?>
			<p class="tipe">
				<a href="php/detail.php?id=<?= $elek['id'] ?>" style="color: white; border: 1px solid maroon ; width : 100px; height: 100px; background-color: red; font-weight: 900; border-radius: 15%;">
					<?= $elek["tipe"]  ?>
				</a>
			</p>

		<?php endforeach; ?>
	</div>

	<!-- footer -->

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		const sideNav = document.querySelectorAll('.sidenav');
		M.Sidenav.init(sideNav);

		const slider = document.querySelectorAll('.slider');
		M.Slider.init(slider, {
			indicators: false,
			height: 700,
			transition: 600,
			interval: 3000
		});
	</script>
</body>

</html>