<?php
	session_start();
//	foreach (array_keys($_POST) as $key)
//	echo $key."<br />";
//	foreach ($_POST as $arg)
//		echo $arg."<br />";

	$username = $_SESSION['loggedInAs'];
	$timePosted = date('Y-m-d H:i:s');
	$timeCode = str_replace(["-", ":", " "], "", $timePosted);
	$postType = $_POST['postType'];
	$community = isset($_POST['community'])? $_POST['community'] : null;
	$title = $_POST['title'];
	$content = null;

	if ($postType === 'txt') {
		$content = $_POST['content'];
	} else if ($postType == 'img') {
		$image = $_FILES['image'];
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		$fileOk = ($ext === "png") || ($ext === "jpg") || ($ext === "jpeg") || ($ext === "gif") || ($ext === "bmp");
		$location = "/images/posts/$username-$timeCode.$ext";
		move_uploaded_file($image['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$location);
		$content = $location;
	}

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	if ($community != null)
		$sql = "INSERT INTO post (author, timePosted, postType, community, title, content) VALUES ('$username', '$timePosted', '$postType', '$community', '$title', '$content')";
	else
		$sql = "INSERT INTO post (author, timePosted, postType, title, content) VALUES ('$username', '$timePosted', '$postType', '$title', '$content')";
	$mysqli->query($sql);

//	echo "$sql<br />";
//	echo $mysqli->error;

	$mysqli->close();

	$url = "/p/$username/$timeCode";
//	echo $url;
	header("location:$url");

	//echo "test";
