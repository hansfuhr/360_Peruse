<?php
	session_start();
	$username = $_SESSION['loggedInAs'];

	$email = $_POST['email'];

	$profilePic = $_FILES['profile-pic'];
	$ext = strtolower(pathinfo($_FILES['profile-pic']['name'], PATHINFO_EXTENSION));
	$fileOk = ($ext === "png") || ($ext === "jpg") || ($ext === "jpeg") || ($ext === "gif") || ($ext === "bmp");

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	if ((strcmp($email, "") != 0)) {
		$ps = $mysqli->prepare("UPDATE account SET email=? WHERE username=?;");
		$ps->bind_param("ss", $email, $username);
		$ps->execute();
		echo $ps->error;
	}

	if (is_uploaded_file($profilePic['tmp_name']) && $fileOk) {
		$profilePicPath = "/images/profile_pics/$username.$ext";
		$ps = $mysqli->prepare("UPDATE account SET profilePicPath=? WHERE username=?;");
		$ps->bind_param("ss", $profilePicPath, $username);
		$ps->execute();
		move_uploaded_file($profilePic['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$profilePicPath);
		echo $ps->error;
	}

	header("location:/account");