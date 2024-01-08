<?php
$host="localhost";
$username="root";
$pass="";
$databasename="dbfood";

$dbcon=mysqli_connect($host,$username,$pass,$databasename);

if ($dbcon->connect_error) {
  die("Connection failed: " . $dbcon->connect_error);
}
echo "Connected successfully";


@define("BASE","http://localhost/food/" );
?>