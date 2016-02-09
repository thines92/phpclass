<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		
		<div class="col-sm-6">
			
			<form action="login.php" method="post">

				<label for="username">Username</label>
				<div class="form-group">
					<input type="text" name="username" class="form-control">
				</div>

				<label for="password">Password</label>
				<div class="form-group">
					<input type="password" name="password" class="form-control">
				</div>

				<input class="btn btn-primary" type="submit" name="submit" value="Submit">

			</form>

		</div>

	</div>
	
	<?php

	if(isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$connection = mysqli_connect('localhost', 'root', 'aidran001', 'loginapp');

		if($connection) {
			echo "We are connected";
		} else {
			die("Database connection failed");
		}

	}

	?>
	

</body>
</html>