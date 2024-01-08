<?php
require_once("con.php");
if(isset($_POST['btn'])=="Insert"){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$valu="'$id','$name','$price'";
	$insertQry="INSERT INTO food_info VALUES($valu)";
	$runQry=mysqli_query($dbcon,$insertQry);
	if($runQry){

		echo "OK";
	}else{
		echo "Error";
	}
	header("Location:".BASE);
}


?>