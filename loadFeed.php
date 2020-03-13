<?php
	$host = "localhost";
	$username = "home";
	$password = "password";
	$database = "peruse_db";
	$mysqli = new mysqli($host, $username, $password, $database);

	//generate feed
	$offset = $_GET['offset'];
	$orderCondition = $_GET['order'];
	$feed = $_GET['user'];
//	// OrderCondition changes depending on hot / new / top etc.
//	// WHERE clause changes depending on user / all / community etc. feed requested
//	// $offset should be incremented by LIMIT amount so as to continuously load for data when the end of the feed is reached
//	$sql = "SELECT *, (/*equation here*/) AS OrderCondition FROM post WHERE /*stuff here*/ ORDER BY OrderCondition DESC LIMIT 10 OFFSET $offset";


	echo "<a href=\"post.php?author" + $author + "&timePosted=" + $timePosted + "\">";
	echo "	<div class=\"post\">";
	echo "		<div class=\"post-contents\">";
	echo "			<h3>An Interesting Title - w/ image</h3>";

	switch($postType) {
		case "text":
			echo "			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque eget nisi vitae viverra. Cras molestie sed diam non mattis. Curabitur malesuada metus a nibh sagittis, ac volutpat eros tempus. Duis rutrum, quam id pretium euismod, libero elit convallis sapien, iaculis venenatis nulla est nec nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras volutpat vulputate turpis quis aliquam. Vivamus tortor odio, vestibulum eu lorem id, imperdiet pulvinar leo.</p>";
			break;
		case "image":
			echo "			<img src=\"images/sample.jpg\" alt=\"Sample post image\">";
			break;
		default:

	}

	echo "			<div class=\"gradient\"></div>";
	echo "		</div>";
	echo "		<a class=\"uv\" href=\"#\">Upvote</a> / <a class=\"dv\" href=\"#\">Downvote</a><p>Posted by <a class=\"text-link\" href=\"https://ca.linkedin.com/in/daulton-baird-37004a177\">Author</a> in <a class=\"text-link\" href=\"community.html\">Photography</a></p>";
	echo "	</div>";
	echo "</a>";

?>