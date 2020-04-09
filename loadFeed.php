<?php
	session_start();

	$host = "localhost";
	$db_username = "root";
	$db_password = "";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $db_username, $db_password, $database);

	$sql = "SELECT *, post.author AS author, post.timePosted AS timePosted";

	if (isset($_GET['orderCondition']))
		switch ($_GET['orderCondition']) {
			case "new":
				$sql .= "";
		}
	else
		$sql .= ", post.timePosted AS orderCondition";

	$sql .= " FROM post";

	if(isset($_SESSION['loggedInAs']))
		$sql .= " LEFT JOIN (SELECT * FROM voteson WHERE username='".$_SESSION['loggedInAs']."') AS voteson ON post.author=voteson.author AND post.timePosted=voteson.timePosted";

	if (isset($_GET['author']))
		$sql .=" WHERE post.author='".$_GET['author']."'";

	if (isset($_GET['searchTerm'])) {
		if (strpos($sql, "WHERE") !== false)
			$sql .= " AND";
		else
			$sql .= " WHERE";
		$sql .= " (post.title LIKE '%".$_GET['searchTerm']."%' OR (post.postType='txt' AND post.content LIKE '%".$_GET['searchTerm']."%') OR post.author LIKE '%".$_GET['searchTerm']."%' OR post.community LIKE '%".$_GET['searchTerm']."%')";
	}

	$sql .= " ORDER BY orderCondition DESC LIMIT 10 OFFSET ".$_GET['offset'].";";


	//generate feed
	//$orderCondition = $_GET['order']; // hot/new/etc.
	$feed = "new";//which posts to show based off of current community or currently logged in user

//	// OrderCondition changes depending on hot / new / top etc.
//	// WHERE clause changes depending on user / all / community etc. feed requested
//	// $offset should be incremented by LIMIT amount so as to continuously load for data when the end of the feed is reached
//	$sql = "SELECT *, (/*equation here*/) AS OrderCondition FROM post WHERE /*stuff here*/ ORDER BY OrderCondition DESC LIMIT 10 OFFSET $offset";


	$result = $mysqli->query($sql);

	echo $mysqli->error;

	while ($row = $result->fetch_assoc()) {
//		echo implode(", ", $row);
//		echo implode(", ", array_keys($row));
		$author = $row['author'];
		$timeCode = str_replace(["-", " ", ":"], "", $row['timePosted']);
		$postType = $row['postType'];
		$community = $row['community'];
		$title = $row['title'];
		$content = $row['content'];
		$upvotes = $row['upvotes'];
		$downvotes = $row['downvotes'];

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
		if (isset($_SESSION['loggedInAs'])) {
			$vote = $row['vote'];
			echo "		<a class='uv".((strcmp($vote, "UP") == 0)? " visited":"")."' onclick='upvote(this, \"$author\", \"$timeCode\")'>Upvote</a> / <a class='dv ".((strcmp($vote, "DN") == 0)? "visited":"")."' onclick='downvote(this, \"$author\", \"$timeCode\")'>Downvote</a>";
		}

		echo "		<p>Posted by <a class='text-link' href='/p/$author'>$author</a>" . (!is_null($community)? " in <a class='text-link' href='/c/$community'>$community</a></p>" : "</p>");
		echo "	</div>";
		echo "</a>";
	}
