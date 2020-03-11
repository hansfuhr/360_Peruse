<?php
	$host = "localhost";
	$username = "home";
	$password = "password";
	$database = "peruse_db";
	$mysqli = new mysqli($host);

	//generate feed
	$offset = 0;

	$offset += 10;

	// OrderCondition changes depending on hot / new / top etc.
	// WHERE clause changes depending on user / all / community etc. feed requested
	// $offset should be incremented by LIMIT amount so as to continuously load for data when the end of the feed is reached
	$sql = "SELECT *, (/*equation here*/) AS OrderCondition FROM post WHERE /*stuff here*/ ORDER BY OrderCondition DESC LIMIT 10 OFFSET $offset";
?>