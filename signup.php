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
<script type="text/javascript" src="js/validity.js"></script>
</head>
<body>
	<?php
		include "header.php";
	?>
	<div id="row">
		<main>
			<form action="http://www.randyconnolly.com/tests/process.php" method="post">
				<fieldset>
					<legend>Create a Peruse Account</legend>
						Username: <input type="text"  required><br>
						Password: <input type="password" id="pass" onkeyup='checkpass();' required><br>
						Confirm password: <input type="password" id="confirm" onkeyup='checkpass();' required><br>
						Choose a profile picture: <br><input type="file" id="userpic" accept="image/png, image/jpeg"><br>
						Email: <input type="email" name="client" id="mail" required><br>
						Email me about the cool new Peruse features <input type="checkbox" name="first"><br>
						Birthdate: <input type="date" name="date"><br>
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


