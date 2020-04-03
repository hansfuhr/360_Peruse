<?php
	session_start();
	if (isset($_SESSION['loggedInAs']))
		unset($_SESSION['loggedInAs']);
//	session_destroy();
	$url = $_GET['url'];
	header("location:$url");