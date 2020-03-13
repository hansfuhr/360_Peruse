<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Peruse</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<!-- <link type="text/javascript" href="js/footerscroll.js"> -->
	<script src="js/footerscroll.js"></script>

	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- <script src="~https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
	<!-- jQuery local fallback -->
	<script>window.jQuery || document.write('<script src="js/jquery-3.1.1.min.js"><\/script>')</script>
</head>

<body>
	<?php
		include "header.php";
	?>
	<main>
		<!-- feed loads here -->
		<script src="js/index.js"></script>
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