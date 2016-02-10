<?php

	include "db.php";
	include "functions.php";

	updateUsername();

?>

<?php include "includes/header.php"; ?>

	<div class="container">
		
		<div class="col-sm-6">
			
			<form action="login_update.php" method="post">

				<label for="username">Username</label>
				<div class="form-group">
					<input type="text" name="username" class="form-control">
				</div>

				<label for="password">Password</label>
				<div class="form-group">
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<select name="id">

						<?php

							showAllData();

						?>

					</select>
				</div>

				<input class="btn btn-primary" type="submit" name="update" value="Update">

			</form>

		</div>

	</div>

<?php include "includes/footer.php"; ?>