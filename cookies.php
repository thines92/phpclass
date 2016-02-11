<?php

	$name = "Somename";
	$value = 100;
	$expiration = time() + (60*60*24*365);

	setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php

		if(isset($_COOKIE['Somename'])) {

			$someOne = $_COOKIE['Somename'];

			echo $someOne;

		} else {

			$someOne = "";

		}

	?>
	

</body>
</html>