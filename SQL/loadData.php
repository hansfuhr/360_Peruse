<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $username, $password, $database);

	$fileContents = file("data.sql");
	foreach ($fileContents as $instruction) {
		$mysqli->query($instruction);
		echo $instruction;
	}
