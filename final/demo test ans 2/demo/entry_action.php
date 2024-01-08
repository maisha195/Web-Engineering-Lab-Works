<?php
session_start();
require_once("conn.php");
if(isset($_POST['btn'])=="Submit"){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$insertValues="'$id','$name','$price'";
	$inSql="INSERT INTO tbl_food_info VALUES($insertValues)";
	$executeQry = mysqli_query($dbconnections,$inSql);
	if($executeQry){
		$_SESSION['msg']="<strong style='color: green;'>Insert Successfully</strong>";
	}else{
		$_SESSION['msg']="<strong style='color: red;'>Insert Error</strong>";
	}
	header("Location:".BASE);
}

?>