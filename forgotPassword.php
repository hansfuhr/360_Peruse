<?php
 if(isset($_POST["submit"])) { 
	$username = $_POST["username"];
	


//TODO check if username matches then get email and password
	$to = 'hansfuhrmann870@gmail.com';
	$subject = 'Recovery of your Peruse Password';
	$txt = 'Hello, you here is the password to your account: ';	//TODO include password
	$headers = 'From: peruse.email@gmail.com';
	$x=mail($to,$subject,$txt,$headers);

	if ($x) {
		
		echo '<script type="text/javascript">';
		echo 'window.location.replace("/login.php");';
		echo "alert('Email sent successfully to $username');";
		echo '</script>';
	} else {
		echo '<script type="text/javascript">';
		echo 'window.location.replace("/login.php");';
		echo "alert('Email failed to send. Please make sure username is correct and try again');";
		echo '</script>';
	}
}
?>