<?php
	session_start();
	$username = $_SESSION['loggedInAs'];
	$author = $_GET['author'];
	$timeCode = $_GET['timeCode'];
	$timePosted = substr_replace(substr_replace(substr_replace(substr_replace(substr_replace($timeCode, "-", 4, 0), "-", 7, 0), " ", 10, 0), ":", 13, 0), ":", 16, 0);
//	echo $timePosted;
	$newVote = strtoupper($_GET['newVote']); //up(true) or down(false)

//	echo "$newVote";

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	$result = $mysqli->query("SELECT vote FROM voteson WHERE username='$username' AND author='$author' AND timePosted='$timePosted';");
	if ($result->num_rows == 0) {
		// insert new
//		echo "INSERT INTO voteson VALUES ('$username', '$author', '$timePosted', '$newVote');";
		$mysqli->query("INSERT INTO voteson VALUES ('$username', '$author', '$timePosted', '$newVote');");
		echo $mysqli->error;
	} else {
		$oldVote = $result->fetch_assoc()['vote'];
		echo $oldVote;
		echo $newVote;
		if ((strcasecmp($oldVote, $newVote) == 0)) {
			// delete vote
			$mysqli->query("DELETE FROM voteson WHERE username='$username' AND author='$author' AND timePosted='$timePosted';");
		} else {
			// update to newVote=='true'
			$mysqli->query("UPDATE voteson SET vote='$newVote' WHERE username='$username' AND author='$author' AND timePosted='$timePosted';");
		}
	}

//	echo "<script>history.go(-1);</script>";
