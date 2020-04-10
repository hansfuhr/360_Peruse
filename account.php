<!DOCTYPE html>
<?php
	session_start();
?>
<html lang = "en">
<head>
	<title>Peruse</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/account.css">

	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- jQuery local fallback -->
	<script>window.jQuery || document.write('<script src="/js/jquery-3.4.1.min.js"><\/script>')</script>
	<script src="/js/editprofile.js"></script>
</head>
<body>
	<?php
		include "header.php";
	?>
	<div id="row">
		<main>
			<form>
				<fieldset>
					<?php
						$host = "localhost";
						$db_username = "root";
						$db_password = "";
						$database = "peruse_db";
						$mysqli = new mysqli($host, $db_username, $db_password, $database);

						$result = $mysqli->query("SELECT * FROM account WHERE username='".$_SESSION['loggedInAs']."';");
						$row = $result->fetch_assoc();

						$profilePicPath = $row['profilePicPath'];
						$username = $row['username'];
						$email = $row['email'];
						$birthdate = date("M jS, Y", strtotime($row['birthdate']));

						echo "<legend>My Profile</legend>";
						echo "<img src='$profilePicPath' alt='Profile image'>";
						echo "<p>Username: $username</p><br />";
						echo "<p>Email: $email</p><br />";
						echo "<p>Birthdate: $birthdate</p><br />";
			
						echo "<button type='button' id='edit'>Edit Profile - Open/Close</button>";
					?>
				</fieldset>
			</form>

			<form action="editAccount.php" method="post" id="edit_info" enctype="multipart/form-data">
				<fieldset>
					<legend>Edit Profile</legend>
						Change profile picture: <br><input type="file" name="profile-pic" id="userpic" accept="image/png, image/jpeg, image/gif"><br />
						Email: <input type="email" name="email" id="mail"><br />
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