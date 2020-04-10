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
			<form action="createAccount.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Create a Peruse Account</legend>
						Username: <input type="text" name="username"  required><br>
						Password: <input type="password" name="password" id="pass" onkeyup='checkpass();' required><br>
						Confirm password: <input type="password" id="confirm" onkeyup='checkpass();' required><br>
						Choose a profile picture: <br><input type="file" name="profile-pic" id="userpic" accept="image/png, image/jpeg, image/gif" required><br>
						Email: <input type="email" name="email" id="mail" required><br>
						Birthdate: <input type="date" name="birthdate" required><br>
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
				<a href ="/" class="text-link">Home</a> | <a href ="#top" class="text-link">Back To Top</a>
				<br />
				<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
				<script src="/js/footer.js"></script>
			</footer>
		</section>
	</div>
</body>
</html>


