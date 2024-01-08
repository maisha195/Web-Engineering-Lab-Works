<?php 
session_start();
require_once("show.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Entry Form</title>
</head>
<body>

    <h2>Product Entry Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $price = $_POST["price"];

        
        echo "ID: $id<br>";
        echo "Name: $name<br>";
        echo "Price: $price<br>";
    }
    ?>

    <form action="entry_action.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>

        <br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="price">Price:</label>
        <select id="price" name="price" required>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="60">60</option>
            <option value="70">70</option>
            <option value="80">80</option>
            <option value="90">90</option>
            <option value="100">100</option>
        </select>

        <br>

        <input type="submit" name="btn" value="Enter">
    </form>
    <br>
<br>
	<?php 
		if($cnt>0){
	?>

	<table width="100%" border="1">
		<tr>
			<th>Sl</th>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
		</tr>
	<?php 
	$i=1;
	while($rec=mysqli_fetch_object($showQry)){
	?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $rec->id;?></td>
			<td><?php echo $rec->name;?></td>
			<td><?php echo $rec->price;?></td>
		</tr>
	<?php $i++;} ?>
	</table>
<?php } ?>
</body>
</html>




