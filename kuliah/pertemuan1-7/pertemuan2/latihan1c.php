<!DOCTYPE html>
<html>
<head>
	<title>latihan 1c</title>
</head>

	<style>
		.container{
			width: 185px;
			height: 185px;
			border: 1px solid black;
			padding: 7px;
			text-align: center;
		}

		.box{
			margin: 5px;
			width: 50px;
			height: 50px;
			border: 1px solid black;
			float: left;
			padding: 10px;
			box-sizing: border-box;
			text-align: center;

		}
		.c{
			clear: both;
			text-align: center;
		}

	</style>
<body>
	 <?php
	 $a = "A";
	 $b = "B";
	 $c = "C";
	 ?>
		<div class="container">

			<div class="box">
				<?php echo $a;?>
			</div>

			<div class="box">
				<?php echo $a;?>
			</div>

			<div class="box">
				<?php echo $a;?>
			</div>

			<div class="box">
				<?php echo $b;?>
			</div>
			<div class="box">
				<?php echo $b;?>
			</div>

			<div class="box c">
				<?php echo $c;?>
			</div>

		</div>

		
	

</body>
</html>