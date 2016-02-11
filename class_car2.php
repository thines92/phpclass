<?php

	class Car {

		function moveWheels() {

			echo "The wheels move";

		}

	}

	if(method_exists("Car", "moveWheels")) {

		echo "This class exists";

	} else {

		echo "This class does not exist";

	}

?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


</body>
</html>