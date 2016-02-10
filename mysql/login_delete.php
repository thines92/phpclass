<?php

	include "db.php";
	include "functions.php";

	deleteUsername();

?>

<?php include "includes/header.php"; ?>

	<div class="container">
		
		<div class="col-sm-6">

			<h1 class="text-center">Delete User</h1>
			
			<form action="login_delete.php" method="post">

				<label for="username">Username</label>
				<div class="form-group">
					<input type="text" name="username" class="form-control">
				</div>

				<input class="btn btn-primary" type="submit" name="delete" value="Delete">

			</form>

		</div>

	</div>
	
<?php include "includes/footer.php" ?>