<!DOCTYPE html>
<html>
<head>
	<titl></title>
	
</head>
<body>
		<h3 align="center">Chess</h3>
	<table width="270px" cellspacing="1px" cellpadding="1px" border="1px" align="center">

	<?php  
		for ($row=1; $row<=8 ; $row++) { 
			echo "<tr>";

			for ($col=1; $col <=8 ; $col++) { 
	
				$total=$row + $col;
				if ($total%2==0) {
				echo "<td height=30px width=30px bgcolor=white></td>";	
				}
				else{
					echo "<td height=30px width=30px bgcolor=black></td>";
				}
			}

			echo "</tr>";
		}



	?>
</table>

</body>
</html>