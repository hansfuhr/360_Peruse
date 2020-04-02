<?php
	session_start();

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$birthdate = $_POST['birthdate'];
	$email = $_POST['email'];
	$profilePic = $_FILES['profile-pic'];
	$ext = strtolower(pathinfo($_FILES['profile-pic']['name'], PATHINFO_EXTENSION));
	$fileOk = ($ext === "png") || ($ext === "jpg") || ($ext === "jpeg") || ($ext === "gif") || ($ext === "bmp");

//	echo $_SERVER['DOCUMENT_ROOT'];

	$sql = "SELECT username FROM account WHERE username='$username';";
	$result = $mysqli->query($sql);

//	echo "\n".$sql;
//	echo "\n".($mysqli->error);

	$url = "/";

	if ($fileOk and ($result->num_rows === 0)) {
		echo "if";
		$insert = "INSERT INTO account (username, password, birthdate, email, dateJoined) VALUES ('$username', '$password', '$birthdate', '$email', CURDATE());";
		$mysqli->query($insert);
		move_uploaded_file($profilePic['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/images/profile_pics/$username.$ext");
//		echo "<img src='/images/profile_pics/$username.$ext' />";
		$_SESSION['loggedInAs'] = $username;
	} else {
		if(isset($_SERVER['HTTP_REFERER']))
			$url = $_SERVER['HTTP_REFERER'];
		// go back to previous page saying this username is taken
	}

	echo "\n".($mysqli->error);
	$mysqli->close();

	header("location:$url");