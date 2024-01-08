<?php 
session_start();
require_once("show.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		if($cnt>0){
	?>

	<table width="50%" border="1">
		<tr>
			<th>Sl</th>
			<th>ID</th>
			<th>NAME</th>
			<th>Blood Group</th>
			<th>Action</th>
		</tr>
	<?php 
	$i=1;
	while($rec=mysqli_fetch_object($showQry)){
	?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $rec->ID;?></td>
			<td><?php echo $rec->Name;?></td>
			<td><?php echo $rec->Blood;?></td>
			<td>  
			<a href="delete.php?del=<?php echo $rec->ID;?>">Delete</a>/
			<a href="edit.php?up=<?php echo $rec->ID;?>">Update</a>

			</td>

		</tr>
	<?php $i++;} ?>
	</table>
<?php } ?>
<p>
<?php
	if($_SESSION['msg']!=""){
		echo $_SESSION['msg'];
		echo $_SESSION['msg']="";
	}

?>

<h1> Search  </h1>

<form action="" method="post">
	<input type="text" name="srch" />
	<input type="submit" name="btn" value="Search">
</form>
<?php
if(@$srcnt>0){ 
		$recSr=mysqli_fetch_object($srchQry);
		echo $recSr->Name;
}
?>
</body>
</html>