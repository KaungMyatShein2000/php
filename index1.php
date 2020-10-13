<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
 	$array =array(
 		"New York, NY" => 8175133,
 		"Los Angeles, CA" =>3792621,
 		"Chicago,IL" =>2695598,
 		"Houston,TX" =>2100263,
 		"Philadephia,PA" =>1526006,
 		"Phoenix,AZ" =>1445632,
 		"San Antonio,TX" =>1327407,
 		"San Diego,CA" =>1307402,
 		"Dallas,TX" =>1197816,
 		"San Jose,CA" =>945942,




 	);
 ?>

<table border="1" cellspacing="0" cellpadding="4" align="center">
		<tr>
		<th>City</th>
		<th>Population</th>
		</tr>
	<?php 
	foreach ($array as $key=>$value) {
	echo "<tr><td>$key</td><td>".number_format($value)."</td></tr>";
	}

	?>
</table><hr>

<!-- population -->

	<h4 align="center"> Population</h4>
	<table  border="1" cellspacing="0" cellpadding="4" align="center">
		<tr>
		<th>City</th>
		<th>Population</th>
		</tr>
		<?php 

		asort($array);
	foreach ($array as $key=>$value) {
	echo "<tr><td>$key</td><td>".number_format($value)."</td></tr>";
	}
	
	?>
			</table><hr>

<!-- city -->

		<h4 align="center"> City</h4>
		<table  border="1" cellspacing="0" cellpadding="4" align="center">
		<tr>
		<th>City</th>
		<th>Population</th>
		</tr>

		<?php
		 ksort($array);
	foreach ($array as $key=>$value) {
		echo "<tr><td>$key</td><td>".number_format($value)."</td></tr>";
	}
		
?>




</body>
</html>