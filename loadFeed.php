<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $username, $password, $database);

	//generate feed
	$offset = $_GET['offset'];
	//$orderCondition = $_GET['order']; // hot/new/etc.
	$feed = "new";//which posts to show based off of current community or currently logged in user

//	// OrderCondition changes depending on hot / new / top etc.
//	// WHERE clause changes depending on user / all / community etc. feed requested
//	// $offset should be incremented by LIMIT amount so as to continuously load for data when the end of the feed is reached
//	$sql = "SELECT *, (/*equation here*/) AS OrderCondition FROM post WHERE /*stuff here*/ ORDER BY OrderCondition DESC LIMIT 10 OFFSET $offset";
	$sql = "SELECT * FROM post ORDER BY timePosted DESC";
	$result = mysqli_query($mysqli, $sql);
//	$result = $mysqli -> query($sql)

	while ($row = $result->fetch_row()) {
		$author = $row[0];
		$timePosted = str_replace(["-", " ", ":"], "", $row[1]);
		$postType = $row[2];
		$community = $row[3];
		$title = $row[4];
		$content = $row[5];
		$upvotes = $row[6];
		$downvotes = $row[7];


for ($i=0;$i<10;$i++) {
		echo "	<div id='$author-$timePosted' class='post'>";
		echo "		<div class='post-contents'>";
		echo "			<h3>$title</h3>";

		switch ($postType) {
			case "txt":
				echo "			<p>$content</p>";
				break;
			case "img":
				echo "			<img src='$content' alt='Sample post image'>";
				break;
			default:

		}

		//this next line should be dependant on the height of the post
//		echo "			<div class=\"gradient\"></div>";

		echo "		</div>";
		echo "<a class='uv' href='#'>Upvote</a> / <a class='dv' href='#'>Downvote</a><p>Posted by <a class='text-link' href='/a/$author'>$author</a> in <a class='text-link' href='/c/$community'>$community</a></p>";
		echo "	</div>";
		echo "</a>";
	}
	}
?>