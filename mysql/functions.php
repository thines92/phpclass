<?php

	include "db.php";

	function showAllData() {

		global $connection;

		$query = "SELECT * FROM `users`";

		$result = mysqli_query($connection, $query);

		if(!$result) {

			die('Query failed'.mysqli_error());

		}


		while($row = mysqli_fetch_assoc($result) ) {

			$id = $row['id'];

			echo "<option value='$id'>$id</option>";

		}

	};

	function readUsers() {

		global $connection;

		$query = "SELECT * FROM `users`";

		$result = mysqli_query($connection, $query);

		if(!$result) {

			die('Query failed'.mysqli_error());

		}

		while($row = mysqli_fetch_assoc($result)) {
			?>
			
			<pre>

			<?php 

			print_r($row);

			?>

			</pre>

			<?php

		}

	}

	function createUser() {

		global $connection;

		if(isset($_POST['submit'])) {

			$username = mysqli_real_escape_string($connection, $_POST['username']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);



			$hashFormat = "$2y$10$";

			$salt = "thishastobeatleast22characters";

			$hashAndSalt = $hashFormat.$salt;

			$password = crypt($password, $hashAndSalt);



			$query = 'INSERT INTO users(`username`, `password`) VALUES ("'.$username.'", "'.$password.'")';

			$result = mysqli_query($connection, $query);

			if(!$result) {

				die('Query failed'.mysqli_error());

			} else {

				echo "User created successfully!";

			}

		}
	}

	function updateUsername() {

		global $connection;

		if(isset($_POST['update'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$id = $_POST['id'];

			$query = "UPDATE `users` SET `username` = '$username', `password` = '$password' WHERE id = $id";

			$result = mysqli_query($connection, $query);

			if(!$result) {

				die("Query failed".mysqli_error());

			} else {

				echo "User updated successfully!";

			}

		}
	};

	function deleteUsername() {

		global $connection;

		if(isset($_POST['delete'])) {

			$username = $_POST['username'];

			$query = "DELETE FROM `users` WHERE `username` = '$username'";

			$result = mysqli_query($connection, $query);

			if(!$result) {

				die("Could not delete that username".mysqli_error($connection));

			} else {

				echo "User deleted successfully!";

			}

		}

	}

?>