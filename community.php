<?php
	session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title>Peruse</title>
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/community.css">
<link type="text/javascript"   href="/js/footerscroll.js">
</head>

<body>
	<?php
		include "header.php";
	?>
	<div id="community-header">
		<h1>Photography</h1>
	</div>
	<main>
		<a href="post.php">
			<div class="post">
				<div class="post-contents">
					<h3>An Interesting Title - w/ image</h3>
					<img src="/images/sample.jpg" alt="Sample post image">
					<div class="gradient"></div>
				</div>
				
				<a class="uv" href="#">Upvote</a> / <a class="dv" href="#">Downvote</a><p>Posted by <a class="text-link" href="https://ca.linkedin.com/in/daulton-baird-37004a177">Author</a> in <a class="text-link" href="community.php">Photography</a></p>
			</div>
		</a>
		
		<a href="post.php">
			<div class="post">
				<div class="post-contents">
					<h3>An Interesting Title - w/ image</h3>
					<img src="/images/sample.jpg" alt="Sample post image">
					<div class="gradient"></div>
				</div>
				
				<a class="uv" href="#">Upvote</a> / <a class="dv" href="#">Downvote</a><p>Posted by <a class="text-link" href="https://ca.linkedin.com/in/daulton-baird-37004a177">Author</a> in <a class="text-link" href="community.php">Photography</a></p>
			</div>
		</a>
		
		<a href="post.php">
			<div class="post">
				<div class="post-contents">
					<h3>An Interesting Title - w/ image</h3>
					<img src="/images/sample.jpg" alt="Sample post image">
					<div class="gradient"></div>
				</div>
				
				<a class="uv" href="#">Upvote</a> / <a class="dv" href="#">Downvote</a><p>Posted by <a class="text-link" href="https://ca.linkedin.com/in/daulton-baird-37004a177">Author</a> in <a class="text-link" href="community.php">Photography</a></p>
			</div>
		</a>
	</main>
	<section id="secondary">
		<div id="recommended-block">
			<h3 id="popular">Top Posts</h3>
			<hr />
			<ol>
				<li><a href="commmunity.html" class="text-link">My dog Wilson</a></li>
				<li><a href="commmunity.html" class="text-link">Savannah Wildlife</a></li>
				<li><a href="commmunity.html" class="text-link">Mountain Landscape</a></li>
			</ol>
		</div>
		<footer>
			<a href ="index.html">Home</a> | <a href ="#top">Back To Top</a>
			<br />
			<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
		</footer>
	</section>
</body>
</html>