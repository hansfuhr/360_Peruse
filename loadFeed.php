<?php
	session_start();

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	//generate feed
	$offset = $_GET['offset'];
	//$orderCondition = $_GET['order']; // hot/new/etc.
	$feed = "new";//which posts to show based off of current community or currently logged in user

//	// OrderCondition changes depending on hot / new / top etc.
//	// WHERE clause changes depending on user / all / community etc. feed requested
//	// $offset should be incremented by LIMIT amount so as to continuously load for data when the end of the feed is reached
//	$sql = "SELECT *, (/*equation here*/) AS OrderCondition FROM post WHERE /*stuff here*/ ORDER BY OrderCondition DESC LIMIT 10 OFFSET $offset";
	$sql = "SELECT * FROM post" . (isset($_SESSION['loggedInAs'])? " LEFT JOIN (SELECT * FROM voteson WHERE username='".$_SESSION['loggedInAs']."') AS voteson ON post.author=voteson.author AND post.timePosted=voteson.timePosted ":"") . " ORDER BY post.timePosted DESC";
	$result = $mysqli->query($sql);
//	$result = $mysqli -> query($sql)

	echo $mysqli->error;

	while ($row = $result->fetch_row()) {
		$author = $row[0];
		$timeCode = str_replace(["-", " ", ":"], "", $row[1]);
		$postType = $row[2];
		$community = (strcmp($row[3], ""))? null : $row[3];
		$title = $row[4];
		$content = $row[5];
		$upvotes = $row[6];
		$downvotes = $row[7];
		$vote = $row[8];

		echo "vote: ".$vote;

//for ($i=0;$i<10;$i++) {
		echo "<a href='/p/$author/$timeCode'>";
		echo "	<div id='$author-$timeCode' class='post'>";
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
//		echo "			<div class=\"gradient\"></div>";		// max-height removed no need for gradient

		echo "		</div>";
		if (isset($_SESSION['loggedInAs']))
			echo "		<a class='uv".((strcmp($vote, "true") == 0)? " visited":"")."' onclick='upvote(this, \"$author\", \"$timeCode\")'>Upvote</a> / <a class='dv ".((strcmp($vote, "false") == 0)? "visited":"")."' onclick='downvote(this, \"$author\", \"$timeCode\")'>Downvote</a>";

		echo "		<p>Posted by <a class='text-link' href='/p/$author'>$author</a>" . (!is_null($community)? " in <a class='text-link' href='/c/$community'>$community</a></p>" : "</p>");
		echo "	</div>";
		echo "</a>";
//	}
	}
?>