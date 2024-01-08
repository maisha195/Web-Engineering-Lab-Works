<?php
require_once("dbcon.php");
$delId=$_GET['del'];
$delSql="DELETE FROM tbl_student WHERE ID='$delId'";
mysqli_query($db,$delSql);
header("Location: ".BASE);
?>