<?php

	include "db.php";
	include "functions.php";

	createUser();

?>

<?php include "includes/header.php"; ?>

	<div class="container">
		
		<div class="col-sm-6">

			<h1 class="text-center">Create User</h1>
			
			<form action="login_create.php" method="post">

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

<?php include "includes/footer.php"; ?>