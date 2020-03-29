<!DOCTYPE html>
<?php
	session_start();
?>
<html lang = "en">
<head>
<title>Peruse</title>
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/loginsignup.css">
<script type="text/javascript" src="/js/createpost.js"></script>
</head>
<body>
	<?php
		include "header.php";
	?>
	<main>
		<form action="http://www.randyconnolly.com/tests/process.php" method="post">
			<fieldset>
				<legend>Create a Post</legend>
					Title: <input type="text" name="posttitle"  required><br>
					
					<input type="radio" id="text" name="typeofpost" value="text">
					<label for="text">Text Post</label>
					<input type="radio" id="image" name="typeofpost" value="image">
					<label for="image">Image Post</label><br>
					<div id="post-input">

</div>
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
</body>
</html>


