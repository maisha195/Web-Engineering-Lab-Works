<?php
session_start();
require_once("dbcon.php");
if(isset($_POST['btn'])=="Update"){
	$id = $_POST['id'];
	$name = $_POST['nm'];
	$blood = $_POST['bld'];
	$inSql="UPDATE tbl_student SET Name='$name',Blood='$blood' 
	WHERE ID='$id'";
	$qryIn = mysqli_query($db,$inSql);
	if($qryIn){
		$_SESSION['msg']="<strong style='color: green;'>Updated Successfully</strong>";
	}else{
		$_SESSION['msg']="<strong style='color: red;'>Update Error</strong>";
	}
	header("Location:".BASE);
}

?>