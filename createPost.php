<!DOCTYPE html>
<?php
	session_start();
	if (!isset($_SESSION['loggedInAs']) || $_SESSION['loggedInAs'] == null) {
		$url = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : "/";
		header("location:$url");
	}
?>
<html lang = "en">
<head>
	<title>Peruse</title>
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="/css/createPost.css">
	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- jQuery local fallback -->
	<script>window.jQuery || document.write('<script src="/js/jquery-3.4.1.min.js"><\/script>')</script>

	<script type="text/javascript" src="/js/createpost.js"></script>

	<?php
		if (!isset($_GET['postType'])) {
			$_GET['postType'] = "txt";
		}
	?>
</head>
<body>
	<?php
		include "header.php";
	?>
	<div id="row">
	<main>
		<form action="/submitPost.php" method="post">
			<fieldset>
				<legend>Create a Post</legend>
					<select name="community">
						<?php
							$host = "localhost";
							$db_username = "root";
							$db_password = "";
							$database = "peruse_db";
							$mysqli = new mysqli($host, $db_username, $db_password, $database);

							$sql = "SELECT following FROM follows WHERE username='".$_SESSION['loggedInAs']."' AND followType='c'";
							$result = $mysqli->query($sql);

							while ($row = $result->fetch_assoc()) {
								$following = $row['following'];
								if ($following === $_GET['community'])
									echo "<option value='$following' selected>c/$following</option>";
								else
									echo "<option value='$following'>c/$following</option>";
							}

							$mysqli->close();
						?>
					</select>
					<br />
					Title: <input type="text" name="title"  required><br />
					<label for="title">Title: </label>
					<input type="radio" id="text" name="postType" value="txt" onclick="getInput()" <?php echo (($_GET['postType'] === "txt")? "checked='checked'" : "")?>>
					<label for="text">Text Post</label>
					<input type="radio" id="image" name="postType" value="img" onclick="getInput()" <?php echo (($_GET['postType'] === "img")? "checked='checked'" : "")?>>
					<label for="image">Image Post</label><br />
					<div id="post-input"></div>
					<input type="submit" value="Submit" class="button"> <input type="reset" value="Reset" class="button">
			</fieldset>
		</form>
	</main>
	<section id="secondary">
		<div id="recommended-block">
			<h3 id="popular">Popular Communities</h3>
			<hr />
			<ul>
				<li><a href="/commmunity.html" class="text-link">Cool CSS tricks</a></li>
				<li><a href="/commmunity.html" class="text-link">Gorilla Pics</a></li>
				<li><a href="/commmunity.html" class="text-link">Good jokes</a></li>
				<li><a href="/commmunity.html" class="text-link">Questions Answered</a></li>
			</ul>
		</div>
					
		<footer>
			<a href ="/index.html">Home</a> | <a href ="#main">Back To Top</a>
			<br />
			<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
		</footer>
	</section>
	</div>
</body>
</html>


