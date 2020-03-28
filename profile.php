<?php
	session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title>Peruse</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/profile.css">
<link type="text/javascript"   href="js/footerscroll.js">
</head>
<body>
	<?php
		include "header.php";
	?>
	<main>
		<form action="http://www.randyconnolly.com/tests/process.php" method="post">
			<fieldset>
				<legend>SampleProfile69</legend>
				<img src="images/profile.jpg" alt="Sample post image">
				<p>Username: SampleProfile69</p><br>
				<p>Password: secret</p><br>
				<p>Email: sampleprofile@someprovider.com</p><br>
				<p>Email me about the cool new Peruse features: Yes</p><br>
				<p>Birthdate: April 11, 1989</p><br>
				<input type="submit" value="EDIT" class="button" id="edit"> 
				
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
</body>
</html>


