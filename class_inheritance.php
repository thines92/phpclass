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

	// $bmw = new Car();
	// $bmw->wheels = 8;
	// $bmw->moveWheels();
	// $bmw->changeWheels();

	// $truck = new Car();
	// $truck->createDoors();

	class Plane extends Car {



	}

	$jet = new Plane();
	echo $jet->doors;

?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


</body>
</html>