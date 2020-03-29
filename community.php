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
		<script src="/js/feed.js"></script>
	</main>
	<section id="secondary">
		<div id="recommended-block">
			<h3 id="popular">Popular Communities</h3>
			<hr />
			<ul>
				<li><a href="/c/CoolCSSTricks" class="text-link">c/CoolCSSTricks</a></li>
				<li><a href="/c/GorillaPics" class="text-link">c/GorillaPics</a></li>
				<li><a href="/c/GoodJokes" class="text-link">c/GoodJokes</a></li>
				<li><a href="/c/QuestionsAnswered" class="text-link">c/QuestionsAnswered</a></li>
			</ul>
		</div>
		<footer>
			<a href ="index.html">Home</a> | <a href ="#top">Back To Top</a>
			<br />
			<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
			<script src="/js/footerscroll.js"></script>
		</footer>
	</section>
</body>
</html>