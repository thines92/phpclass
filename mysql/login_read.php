<?php

	include "db.php";
	include "functions.php";

?>

<?php include "includes/header.php"; ?>

	<div class="container">
		
		<div class="col-sm-6">

			<h1 class="text-center">All Users</h1>
			
			<?php readUsers(); ?>

		</div>

	</div>
	
<?php include "includes.footer.php"; ?>