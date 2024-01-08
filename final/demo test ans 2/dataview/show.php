<?php
require_once("dbcon.php");
$showSQL="SELECT * FROM tbl_student";
$showQry=mysqli_query($db,$showSQL);
$cnt=mysqli_num_rows($showQry); 



/*++++++++++++++++++++++*/
if(isset($_POST['btn'])=="Search"){
	$n=$_POST['srch'];
	$srchSQL="SELECT * FROM tbl_student WHERE ID='$n'";
	$srchQry=mysqli_query($db,$srchSQL);
	$srcnt=mysqli_num_rows($srchQry);
}
?>