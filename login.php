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

		$sql = "SELECT passwordHash FROM account WHERE username='".$_POST['username']."';";
		$result = $mysqli->query($sql);

		if (($row = $result->fetch_assoc()) && password_verify($_POST['password'], $row['passwordHash'])) {
//			password_verify($_POST['password'], $row['passwordHash']);
			$_SESSION['loggedInAs'] = $_POST['username'];
			header("location:/");
		}
	} else {
//		$_SESSION['preLogin'] = $_SERVER['HTTP_REFERER'];
	}
?>
<html lang = "en">
<head>
<title>Peruse</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/loginsignup.css">
<link type="text/javascript"   href="js/footer.js">
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
						Username: <input type="text" name="username" required><br>
						Password: <input type="password" name="password" required><br>
						<input type="submit" value="Log In" class="button"> 
				</fieldset>
			</form>
			<form action="forgotPassword.php" method="post">
				<fieldset>
					<legend>Forgot your password?</legend>
						Enter your username: <input type="text" name="username" required><br>
						You will receive a password recovery email.<br>
						<input type="submit" name="submit" value="Email Me" class="button">
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
				<script src="/js/footer.js"></script>
			</footer>
		</section>
	</div>
</body>
</html>


