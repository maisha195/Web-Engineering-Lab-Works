<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>
		<?php
			if($_SESSION['msg']!=""){
				echo $_SESSION['msg'];
				echo $_SESSION['msg']="";
			}

		?>
	</p>
	<form action="insert_action.php" method="post">
ID: <input type="text" name="id" /> <br />
Name: <input type="text" name="nm" /> <br />
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
	<input type="submit" name="btn" value="Insert" />
	</form>
</body>
</html>