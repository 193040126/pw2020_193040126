<!DOCTYPE html>
<html>
<head>
	<title>latihan 2b</title>
	
</head>
<body>
	
		<table border ="1"cellpadding="5" cellspacing="0">

			<tr >
				<th>kolom 1</th>
				<th>kolom 2</th>
				<th>kolom 3</th>
				<th>kolom 4</th>
				<th>kolom 5</th>
			</tr>

			<?php 
				for ($i=1; $i <= 5; $i++) { 
					echo "<tr>";
					if ($i % 2) {
						for ($j=1; $j <=5 ; $j++) { 
					echo "<td>baris ke $i, kolom ke $j</td>";
				}
					}else{
						for ($j=1; $j <=5 ; $j++) { 
					echo "<td>&nbsp</td>";
				}
					}
					
				echo "</tr>";

				}


			 ?>

		</table>
	
</body>
</html>

 