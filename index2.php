<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  

		$hambuger=4.95;
		$chocolate_milkshake=1.95;
		$cola=0.85;
		$tax_rate=0.075;
		$tip_rate=0.16;

		$subtotal=($hambuger *2) +$chocolate_milkshake + $cola;
		$tax =$subtotal * $tax_rate;
		$tip =$subtotal * $tip_rate;
		$total =$subtotal + $tip + $tax;

	print "Total =$total"






	?>

</body>
</html>