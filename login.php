<?php
	session_start();
?>
<!DOCTYPE html>
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
			<form action="http://www.randyconnolly.com/tests/process.php" method="post">
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
				<script src="/js/footerscroll.js"></script>
			</footer>
		</section>
	</div>
</body>
</html>


