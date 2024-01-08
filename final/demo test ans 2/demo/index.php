<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food SHop</title>
</head>
<body>
																																cd /opt/
	<h1> Food Information Insert Table</h1>

	<p>
		<?php
			if($_SESSION['msg']!=""){
				echo $_SESSION['msg'];
				echo $_SESSION['msg']="";
			}

		?>
	<form action="entry_action.php" method="post">
	Food Id	<input type="text" name="id"> <br><br>

	Food Name	<input type="text" name="name">
	<br><br>
		<select name="price">
	<option value="-99">Select Food Price</option>
	<option value="102">102</option>
	<option value="105">107</option>
	<option value="99">99</option>
	<option value="501">501</option>
	<option value="450">450</option>
	<option value="320">320</option>
</select>
	<input type="Submit" name="btn">
	</form>
	<br>
	<a href="viewfood.php">Show All Food</a>

</body>
</html>