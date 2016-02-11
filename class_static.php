<?php

	class Car {

		static $wheels = 4;
		var $hood = 1;

		function changeWheels() {

			Car::$wheels = 10;

		}

	}

	$bmw = new Car();

	// $bmw->wheels; // Can't do this with static

	Car::changeWheels();

	echo Car::$wheels; // This is how to access static variables



?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


</body>
</html>