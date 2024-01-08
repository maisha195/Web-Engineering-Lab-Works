
<?php
session_start();
require_once ("foodView.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Food Info</title>
</head>
<body>

	<h1>Food Information Inserting</h1>

<form action="insert_action.php" method="post">
	ID <input type="text" name="id"> <br> <br>
	Food Name<input type="text" name="name"> <br> <br>
	
Product Price <select name="price">
	<option value="">Choose Price</option>
	<option value="100">100</option>
	<option value="150">150</option>
	<option value="300">300</option>
	<option value="500">500</option>
</select>
<br><br>

	<input type="submit" name="btn" value="Insert" ><br> <br>
</form>



<section>

    <?php
    if($cnt>0){
        ?>

        <table width="50%" border="1">
            <tr>
                <th>Sl</th>
                <th>ID</th>
                <th>NAME</th>
                <th>Price</th>

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

</section>
</body>
</html>
