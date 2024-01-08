<?php
require_once("con.php");
$showSQL="SELECT * FROM food_info";
$showQry=mysqli_query($dbcon,$showSQL);
$cnt=mysqli_num_rows($showQry);

?>