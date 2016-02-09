<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="form.php" method="post">
		<input type="text" name="username" placeholder="Enter username">
		<input type="password" name="password" placeholder="Enter password">
		<input type="submit" name="submit">
	</form>
	
	<?php

		if(isset($_POST['submit'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$minUsername = 5;
			$maxUsername = 15;

			$names = ['Tyler', 'Chris', 'Peter', 'Samid', 'Mohad', 'Maria', 'Jane', 'Tom'];

			echo "It works";

			if($username) {

				if(strlen($username) < $minUsername) {

					echo "Username must be longer than 5 characters";

				}

				if(strlen($username) > $maxUsername) {

					echo "Username cannot be longer than 10 characters";

				}

				if(!in_array($username, $names)) {

					echo 'Sorry, that username is not recognized';

				} else {
					echo 'Welcome to this thing';
				}

			}

		}

	?>
	

</body>
</html>