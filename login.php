<!DOCTYPE html>
<?php
	session_start();
	if (!isset($_SESSION['loggedInAs'])) {
		$_SESSION['loggedInAs'] = null;
	}

	if (isset($_POST['username']) and isset($_POST['password'])) {
		$host = "localhost";
		$db_username = "root";
		$db_password = "";
		$database = "peruse_db";
		$mysqli = new mysqli($host, $db_username, $db_password, $database);

		$sql = "SELECT username FROM account WHERE username='$username' AND password='$password'";
		$result = $mysqli->query($sql);
		if ($result->num_rows === 1) {
			$_SESSION['loggedInAs'] = $username;

		}
	} else {
		$_SESSION['preLogin'] = $_SERVER['HTTP_REFERER'];
	}
?>
<html lang = "en">
<head>
<title>Peruse</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/loginsignup.css">
<link type="text/javascript"   href="js/footerscroll.js">
</head>
<body>
	<?php
		include "header.php";
	?>
	<div id="row">
		<main>
			<form action="/login" method="post">
				<fieldset>
					<legend>Log in to Peruse</legend>
						Username: <input type="text" name="client" required><br>
						Password: <input type="password" name="client" required><br>
						<input type="submit" value="Submit" class="button"> <input type="reset" value="Reset" class="button">
				</fieldset>
			</form>
		</main>
		<section id="secondary">
			<div id="recommended-block">
				<h3 id="popular">Popular Communities</h3>
				<hr />
				<ul>
					<li><a href="commmunity.html" class="text-link">Cool CSS tricks</a></li>
					<li><a href="commmunity.html" class="text-link">Gorilla Pics</a></li>
					<li><a href="commmunity.html" class="text-link">Good jokes</a></li>
					<li><a href="commmunity.html" class="text-link">Questions Answered</a></li>
				</ul>
			</div>
			<footer>
				<a href ="index.html">Home</a> | <a href ="#main">Back To Top</a>
				<br />
				<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
				<script src="/js/footerscroll.js"></script>
			</footer>
		</section>
	</div>
</body>
</html>


