<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_food";

$dbconnections = mysqli_connect($host, $username, $password, $dbname);

@define("BASE", "http://localhost/demo/");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
