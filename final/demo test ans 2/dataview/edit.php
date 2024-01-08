<?php 
/*++++++++++++++++++++++*/
require_once("dbcon.php");
$upID=$_GET['up'];
$srchSQL="SELECT * FROM tbl_student WHERE ID='$upID'";
$srchQry=mysqli_query($db,$srchSQL);
$recSr=mysqli_fetch_object($srchQry);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="update.php" method="post">
		ID: <input type="text" value="<?php echo $recSr->ID; ?>" disabled="disabled" /> <br />
		<input type="hidden" name="id" value="<?php echo $recSr->ID; ?>" /> 
		Name: <input type="text" name="nm" value="<?php echo $recSr->Name; ?>" /> <br />
		<select name="bld">
			<option value="-99">Select Blood Group</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="A-">A-</option>
			<option value="B-">B-</option>
		</select>
		<br />
		<input type="submit" name="btn" value="Update" />
	</form>
</body>
</html>