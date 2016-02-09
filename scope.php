<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php

		$x = "outside";

		function convert() {
			global $x;
			$x = "inside";

		}

		echo $x;

		convert();

		echo $x;

	?>

</body>
</html>