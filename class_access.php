<?php

	class Car {

		public $wheels = 4;
		protected $hood = 1;
		private $engine = 1;
		var $doors = 4;

		function showPropertyPrivate() {

			echo $this->engine; //This works

		}

	}

	$bmw = new Car();
	$bigTruck = new Semi();

	class Semi extends Car {

		function showProperty() {

			echo $this->hood;
			echo $this->engine;// Error

		}

	}

	$bigTruck->showProperty();
	$bmw->showPropertyPrivate();

?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


</body>
</html>