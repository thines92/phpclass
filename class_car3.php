<?php

	class Car {

		var $wheels = 4;
		var $hood = 1;
		var $engine = 1;
		var $doors = 4;

		function moveWheels() {

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
	$bmw->wheels = 8;

	$truck = new Car();

	echo $truck->doors;

	$truck->createDoors();

	echo $truck->doors; // Equals 6

	$bmw->moveWheels();
	$bmw->changeWheels();

	echo $bmw->wheels."<br>";
	echo $truck->wheels = 12;
	echo $truck->wheels; // Equals 12

?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


</body>
</html>