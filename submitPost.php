<?php
	session_start();

	$author = $_SESSION['loggedInAs'];
	$timePosted = date('Y-m-d H:i:s');
	$postType = $_POST['postType'];
	$community = $_POST['community'];
	$title = $_POST['title'];
	$content = null;

	if ($postType === 'txt') {
		$content = $_POST['content'];
	} else if ($postType == 'img') {
		$image = $_FILES['image'];
		$ext = strtolower(pathinfo($_FILES['profile-pic']['name'], PATHINFO_EXTENSION));
		$fileOk = ($ext === "png") || ($ext === "jpg") || ($ext === "jpeg") || ($ext === "gif") || ($ext === "bmp");
		$timeCode = str_replace(["-", ":", " "], "", $timePosted);
		$location = "/images/posts/$username-$timeCode.$ext";
		move_uploaded_file($image['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$location);
		$content = $location;
	}

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	$sql = "INSERT INTO post (author, timePosted, postType, community, title, content) VALUES ($author, $timePosted, $postType, $community, $title, $content)";
	$mysqli->query($sql);

	$mysqli->close();