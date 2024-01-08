<?php
	$host = "localhost";
	$dbName = "db_food";
	$userName = "root";
	$pwd = "";
	/*Connection*/
$dbCon = mysqli_connect($host, $userName, $pwd, $dbName);
@define("BASE", "http://localhost/webEdemotest/");
?>