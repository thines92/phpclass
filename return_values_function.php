<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php

		function addNumbers($number1, $number2) {

			$sum = $number1 + $number2;

			return $sum;

		}

		$result = addNumbers(34,64);

		$result = addNumbers(100,$result);

		echo $result;

	?>

</body>
</html>