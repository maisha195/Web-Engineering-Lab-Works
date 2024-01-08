<?php 
require_once("conn.php");
$showSQL="SELECT * FROM tbl_food_info";
$showQry=mysqli_query($dbCon,$showSQL);
$cnt=mysqli_num_rows($showQry); 


?>