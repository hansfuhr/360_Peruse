<!DOCTYPE html>
<?php
	session_start();
	if (!isset($_SESSION['loggedInAs'])) {
		$_SESSION['loggedInAs'] = null;
	}
	echo "<script>console.log(\"".$_SESSION['loggedInAs']."\");</script>";
?>
<html lang = "en">
<head>
	<title>Peruse</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<!-- <link type="text/javascript" href="js/footerscroll.js"> -->
	<script src="/js/footerscroll.js"></script>

	<!-- jQuery CDN -->
	<script
			src="https://code.jquery.com/jquery-3.4.1.js"
			integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			crossorigin="anonymous"></script>
<!--	<script src="~https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>-->
	<!-- jQuery local fallback -->
	<script>window.jQuery || document.write('<script src="/js/jquery-3.4.1.min.js"><\/script>')</script>
</head>
<body>
	<?php
		include "header.php";
	?>
	<div id="row">
		<main>
			<?php
				if ($_SESSION['loggedInAs'] == null) {
					echo "<div id='create-post'>";
					echo "<input id='txt-input' type='text' placeholder='Create Post' />";
					echo "<img id='img-icon' src='/images/logo_small.png' />";
					echo "</div >";
				}
			?>
			<!-- feed loads here -->
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
			<!-- start test blocks -->
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
			<!-- end test blocks -->
			<footer>
				<a href ="/">Home</a> | <a href ="#main">Back To Top</a>
				<br />
				<i>Copyright &copy; Fuhrmann-Johnston Productions</i>
				<script src="/js/footerscroll.js"></script>
			</footer>
		</section>
	</div>
</body>
</html>