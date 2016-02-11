<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php

		if(isset($_POST['submit'])) {
			echo $_POST['name'];
		}

	?>

	<form action="post.php" method="post">
		
		<input type="text" name="name">
		<input type="submit" name="submit">

	</form>
	

</body>
</html>