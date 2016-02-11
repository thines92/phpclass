<?php

	class Car {

		var $wheels = 4;
		var $hood = 1;
		var $engine = 1;
		var $doors = 4;

		function __construct() {

			echo "The wheels move";

		}

		function changeWheels() {

			$this->wheels = 10;

		}

		function createDoors() {

			$this->doors = 6;

		}

	}

	$bmw = new Car();

	$truck = new Car();


?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


</body>
</html>