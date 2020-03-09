<?php
$dbname = 'peruse_db';
$dbuser = 'adjohnston99';
$dbpass = 'Andojo99.';
$dbhost = '99.199.143.210';


$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");
$q = mysqli_query($link, "SELECT * FROM account;");
echo $q;