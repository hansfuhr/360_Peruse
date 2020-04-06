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
				
				<legend>My Profile</legend>
				<img src="images/profile.jpg" alt="Profile image">
				<p>Username: SampleProfile69</p><br>
				<p>Password: secret</p><br>
				<p>Email: sampleprofile@someprovider.com</p><br>
				

				<p>Birthdate: April 11, 1989</p><br>
			
				<button type="button" id="edit">Edit Profile - Open/Close</button>


			</fieldset>
		</form>

		<form action="http://www.randyconnolly.com/tests/process.php" method="post" id="edit_info">
			<fieldset>
				<legend>Edit Profile</legend>
						Change profile picture: <br><input type="file" name="profile-pic" id="userpic" accept="image/png, image/jpeg, image/gif" required><br>
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
			<a href ="index.html">Home</a> | <a href ="#main">Back To Top</a>
			<br />
			<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
		</footer>
	</section>
		</div>
</body>
</html>