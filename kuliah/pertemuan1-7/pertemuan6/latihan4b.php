<?php 
	//cara pertama
	//$komputer = array("motherboard", "processor" , "hard disk" , "PC coller" , "VGA card" , "SSD", "card reader", "modem");

	//cara kedua
	$komputer = array();

	$komputer[] = "motherboard";
	$komputer[] = "processor";
	$komputer[] = "hard disk";
	$komputer[] = "PC coller";
	$komputer[] = "VGA card";
	$komputer[] = "SSD";



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h4><b>Macam - macam perangkat keras komputer</b></h4>
 	<!-- 
 		cara pertama

 	

 	<ol>
 		<li><?php echo $komputer[0]; ?></li>
 		<li><?php echo $komputer[1]; ?></li>
 		<li><?php echo $komputer[2]; ?></li>
 		<li><?php echo $komputer[3]; ?></li>
 		<li><?php echo $komputer[4]; ?></li>
 		<li><?php echo $komputer[5]; ?></li>
 	</ol>

 	<h4>Macam - macam perangkat keras komputer baru</h4>

 	<ol>
 		<li><?php echo $komputer[6]; ?></li>
 		<li><?php echo $komputer[2]; ?></li>
 		<li><?php echo $komputer[7]; ?></li>
 		<li><?php echo $komputer[0]; ?></li>
 		<li><?php echo $komputer[3]; ?></li>
 		<li><?php echo $komputer[1]; ?></li>
 		<li><?php echo $komputer[5]; ?></li>
 		<li><?php echo $komputer[4]; ?></li>
 	</ol> 
 	-->

 	<!-- cara kedua -->
 	<?php 

 		$hardware = array();

 		$hardware[] = "Motherboard"; 
 		$hardware[] = "Processor";
 		$hardware[] = "Hard Disk";
 		$hardware[] = "PC Coller";
 		$hardware[] = "VGA Card";
 		$hardware[] = "SSD";
 	 ?>


 	 <ol>
	 	 <?php 

	 	 	for ($i=0; $i < count($hardware) ; $i++) { 
	 	 		echo "<li>$hardware[$i]</li>";

	 	 	}
	 	  ?>
 	  </ol>

 	  <?php 
 	  	$hasil = array_push($hardware, "Modem","Card Reader");
 	   ?>

 	   <hr>

 	   <h4><b>Macam - macam perangkat keras komputer baru</b></h4>
 	   
 	   <ol>
 	   	<?php 
 	   		for ($i=0; $i < count($hardware) ; $i++) { 
 	   			echo "<li>$hardware[$i]</li>";
 	   		}

 	   	 ?>
 	   </ol>


 </body>
 </html>