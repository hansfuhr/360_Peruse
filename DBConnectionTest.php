<?php
$dbname = "peruse_db";
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to connect to '$dbhost'");


//	WITH RECURSIVE commentsCTE AS
//(
//	SELECT *, CAST(parentAuthor AS CHAR(200)) AS authorPath, CAST(parentTimePosted AS CHAR(200)) AS timePostedPath
//	FROM category WHERE parentAuthor IS NULL
//	UNION ALL
//	SELECT c.category_id, c.name, CONCAT(commentsCTE.path, ",", c.category_id)
//	FROM category c JOIN cte ON cte.category_id=c.parent
//	)
//	SELECT * FROM commentsCTE ORDER BY path;

$q = $link->query("SELECT * FROM account;");
echo $q;