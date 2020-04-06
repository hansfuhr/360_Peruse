<header>
	<link rel="stylesheet" href="/css/header.css">
	<script src="/js/header.js"></script>
	<a href="/"><img id="logo" src="/images/logo_trans.png" alt="Peruse logo"></a>
	<select id="feed-select">
		<option>All</option>
		<option>Popular</option>
		<option>Top Communities</option>
	</select>
	<input type="search" id="search-bar" placeholder="Search Peruse">
	<?php
		if (isset($_SESSION['loggedInAs'])) {
			echo "<a href='/logout.php?url=".$_SERVER['REQUEST_URI']."'><input class='header-btn' type='button' value='LOG OUT' /></a>";
			echo "<a href='/p/".$_SESSION['loggedInAs']."'><input class='header-btn' type='button' value='p/".$_SESSION['loggedInAs']."' /></a>";
		} else {
			echo "<a href='/signup' ><input class='header-btn' type='button' value='SIGN UP' /></a>";
			echo "<a href='/login'' ><input class='header-btn' type='button' value='LOG IN' /></a>";
		}
	?>
</header>
