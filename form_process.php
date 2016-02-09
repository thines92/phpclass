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