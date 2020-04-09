<?php
	session_start();

	if (isset($_SESSION['loggedInAs'])) {
		$username = $_SESSION['loggedInAs'];
		$host = "localhost";
		$db_username = "root";
		$db_password = "";
		$database = "peruse_db";
		$mysqli = new mysqli($host, $db_username, $db_password, $database);

		$sql = "SELECT admin FROM account WHERE username='$username'";
		$result = $mysqli->query($sql);
		$row = $result->fetch_assoc();
		$admin = $row['admin'];
		echo $admin;
	} else {
		echo 0;
	}