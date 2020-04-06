<?php
	session_start();

	$postAuthor = $_POST['postAuthor'];
	$postTimePosted = $_POST['postTimePosted'];
	$postTimeCode = str_replace(["-", ":", " "], "", $postTimePosted);
	$author = $_SESSION['loggedInAs'];
//	echo $author;
	$comment = $_POST['comment'];

	$timePosted = date('Y-m-d H:i:s');
	$timeCode = str_replace(["-", ":", " "], "", $timePosted);

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	$sql = "INSERT INTO comment (postAuthor, postTimePosted, author, timePosted, comment) VALUES (?, ?, ?, ?, ?);";
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param('sssss', $postAuthor, $postTimePosted, $author, $timePosted, $comment);
	$stmt->execute();

//	echo $mysqli->error;

	header("location:/p/$postAuthor/$postTimeCode#$author-$timeCode");