<?php
session_start();
require_once("conn.php");
if(isset($_POST['btn'])=="Enter"){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$val="'$id','$name','$price'";
	$inSql="INSERT INTO tbl_food_info VALUES($val)";
	$qryIn = mysqli_query($dbCon,$inSql);
	if($qryIn){
		$_SESSION['msg']="<strong style='color: green;'>Insert Successfully</strong>";
	}else{
		$_SESSION['msg']="<strong style='color: red;'>Insert Error</strong>";
	}
	header("Location:".BASE);
}

?>