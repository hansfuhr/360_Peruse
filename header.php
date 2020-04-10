<div id="top"></div>
<header>
	<link rel="stylesheet" href="/css/header.css">
<!--	<script src="/js/header.js"></script>-->
	<a href="/"><img id="logo" src="/images/logo_trans.png" alt="Peruse logo"></a>
	<div id="header-left">
		<select id="feed-select">
			<option>All</option>
			<option>Popular</option>
			<option>Top</option>
		</select>
		<input type="search" id="search-bar" placeholder="Search Peruse">
		<script src="/js/search.js"></script>
	</div>
<!--	<div id="header-right">-->
	<?php
		if (isset($_SESSION['loggedInAs'])) {
			echo "<a href='/logout.php?url=".$_SERVER['REQUEST_URI']."'><input id='btn2' class='header-btn' type='button' value='LOG OUT' /></a>";
			echo "<a href='/account'><input id='btn1' class='header-btn' type='button' value='".$_SESSION['loggedInAs']."' /></a>";
		} else {
			echo "<a href='/signup' ><input id='btn2' class='header-btn' type='button' value='SIGN UP' /></a>";
			echo "<a href='/login'' ><input id='btn1' class='header-btn' type='button' value='LOG IN' /></a>";
		}
	?>
<!--	</div>-->
</header>