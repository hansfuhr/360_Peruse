<!DOCTYPE html>
<?php
	session_start();
?>
<html lang = "en">
<head>
	<title>Peruse</title>
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/post.css">
	<script src="/js/footer.js"></script>

	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- jQuery local fallback -->
	<script>window.jQuery || document.write('<script src="/js/jquery-3.4.1.min.js"><\/script>')</script>
</head>

<body>
	<?php
		include "header.php";
	?>
<!--	<div id="community-header">-->
<!--		<h1>Photography</h1>-->
<!--	</div>-->
	<div id="row">
		<main>
			<script src="/js/vote.js"></script>
			<?php
			$author = $_GET['author'];
			$timeCode = $_GET['timeCode'];
			$timePosted = substr_replace(substr_replace(substr_replace(substr_replace(substr_replace($timeCode, "-", 4, 0), "-", 7, 0), " ", 10, 0), ":", 13, 0), ":", 16, 0);
//			$username = $_SESSION['loggedInAs'];

			$host = "localhost";
			$db_username = "root";
			$db_password = "";
			$database = "peruse_db";
			$mysqli = new mysqli($host, $db_username, $db_password, $database);

			$postSQL = "SELECT * FROM (SELECT * FROM post WHERE author='$author' AND timePosted='$timePosted') AS P". (isset($_SESSION['loggedInAs'])? " LEFT JOIN (SELECT * FROM voteson WHERE username='".$_SESSION['loggedInAs']."' AND author='$author' AND timePosted='$timePosted') AS V ON P.author=V.author AND P.timePosted=V.timePosted;": ";");
			$postResult = $mysqli->query($postSQL)->fetch_assoc();

			echo $mysqli->error;

			$postType = $postResult['postType'];
			$community = $postResult['community'];
			$title = $postResult['title'];
			$content = $postResult['content'];

			echo "<div class='post'>";
			echo "	<div class='post-contents'>";
			echo "		<h3>$title</h3>";

			switch ($postType) {
				case "txt":
					echo "			<p>$content</p>";
					break;
				case "img":
					echo "			<img src='$content' alt='Sample post image'>";
					break;
				default:
			}

			echo "</div>";
			if (isset($_SESSION['loggedInAs'])) {
				$vote = $postResult['vote'];
				echo "		<a class='uv" . ((strcmp($vote, "UP") == 0) ? " visited" : "") . "' onclick='upvote(this, \"$author\", \"$timeCode\")'>Upvote</a> / <a class='dv " . ((strcmp($vote, "DN") == 0) ? "visited" : "") . "' onclick='downvote(this, \"$author\", \"$timeCode\")'>Downvote</a>";
			}

			echo "		<p>Posted by <a class='text-link' href='/p/$author'>$author</a>" . (!is_null($community)? " in <a class='text-link' href='/c/$community'>$community</a></p>" : "</p>");

			echo "<hr />";

			echo "<section id='comments'>";

			$commentSQL = "SELECT * FROM comment WHERE postAuthor='$author' AND postTimePosted='$timePosted';";
			$commentResult = $mysqli->query($commentSQL);

			while ($comment = $commentResult->fetch_assoc()) {
				echo "<div class='reply'>";
				echo "<p>".$comment['comment']."</p>";
				echo "</div>";
			}

//			echo "<script data-author='$author' data-timeCode='$timeCode' src='/js/comments.js'></script>";

//			echo "<div class=\"reply\"><p>Lorem ipsum dolor sit amet</p><div class=\"reply\"><p>Lorem ipsum dolor sit amet</p><div class=\"reply\"><p>Lorem ipsum dolor sit amet</p></div></div><div class=\"reply\"><p>Lorem ipsum dolor sit amet</p></div></div><div class=\"reply\"><p>Lorem ipsum dolor sit amet</p></div><div class=\"reply\"><p>Lorem ipsum dolor sit amet</p></div>";

			echo "</section>";
			if (isset($_SESSION['loggedInAs'])) {
				echo "<form id='commentForm' action='/submitComment.php' method='post'>";
				echo "<input type='hidden' name='postAuthor' value='$author' />";
				echo "<input type='hidden' name='postTimePosted' value='$timePosted' />";
				echo "<textarea id='commentInput' name='comment' placeholder='Leave a comment...'></textarea>";
				echo "<input id='commentSubmit' type='submit' />";
				echo "</form>";
			}
			echo "</div>";
			?>
			<script src="/js/commentForm.js"></script>
<!--			<section id="comments">-->
<!--				<div class="reply">-->
<!--					<p>Lorem ipsum dolor sit amet</p>-->
<!--					<div class="reply">-->
<!--						<p>Lorem ipsum dolor sit amet</p>-->
<!--						<div class="reply">-->
<!--							<p>Lorem ipsum dolor sit amet</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="reply">-->
<!--						<p>Lorem ipsum dolor sit amet</p>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="reply">-->
<!--					<p>Lorem ipsum dolor sit amet</p>-->
<!--				</div>-->
<!--				<div class="reply">-->
<!--					<p>Lorem ipsum dolor sit amet</p>-->
<!--				</div>-->
<!--			</section>-->
<!--		</div>-->
		</main>
		<section id="secondary">
			<div id="recommended-block">
				<h3 id="popular">Top Posts</h3>
				<hr />
				<ol>
					<li><a href="/commmunity.html" class="text-link">My dog Wilson</a></li>
					<li><a href="/commmunity.html" class="text-link">Savannah Wildlife</a></li>
					<li><a href="/commmunity.html" class="text-link">Mountain Landscape</a></li>
				</ol>
			</div>
			<footer>
				<a href ="/index.html">Home</a> | <a href ="#top">Back To Top</a>
				<br />
				<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
			</footer>
		</section>
	</div>
</body>
</html>