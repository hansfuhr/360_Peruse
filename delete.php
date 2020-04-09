<?php
	$type = $_GET['type'];
	$author = $_GET['author'];
	$timeCode = $_GET['timeCode'];
	$timePosted = substr_replace(substr_replace(substr_replace(substr_replace(substr_replace($timeCode, "-", 4, 0), "-", 7, 0), " ", 10, 0), ":", 13, 0), ":", 16, 0);

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	if (strcasecmp($type, "post") == 0) {
		$sql = "DELETE FROM post WHERE author='$author' AND timePosted='$timePosted';";
		$mysqli->query($sql);
		$sql = "DELETE FROM comment WHERE postAuthor='$author' AND postTimePosted='$timePosted';";
		$mysqli->query($sql);
	} else if (strcasecmp($type, "comment") == 0) {
		$sql = "DELETE FROM comment WHERE author='$author' AND timePosted='$timePosted';";
		$mysqli->query($sql);
		echo $mysqli->error;
	}