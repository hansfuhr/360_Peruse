<?php
	$postAuthor = $_GET['postAuthor'];
	$postTimeCode = $_GET['postTimeCode'];
	$postTimePosted = substr_replace(substr_replace(substr_replace(substr_replace(substr_replace($postTimeCode, "-", 4, 0), "-", 7, 0), " ", 10, 0), ":", 13, 0), ":", 16, 0);

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	$commentSQL = "SELECT * FROM comment WHERE postAuthor='$postAuthor' AND postTimePosted='$postTimePosted';";
	$commentResult = $mysqli->query($commentSQL);
	$commentsArray = $commentResult->fetch_all(MYSQLI_ASSOC);

	echo json_encode($commentsArray);

//	while (count($commentsArray) > 0) {
//		foreach ($commentsArray as $row) {
//			if (($row['parentAuthor'] == $row['postAuthor']) && ($row['parentTimePosted'] == $row['postTimePosted'])) {
//
//			}
//			echo $commentsArray;
//		}
//	}
