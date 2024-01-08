<?php
require_once("getdata.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
    <h1>Search Blood</h1>

    <form action="" method="post">
      Choose Blood Group <select name="srchBlood" id="">
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB-">AB-</option>
<option value="C+">C+</option>
      </select>
      <input type="submit" name="srcbtn" value="Search">
    </form>
    <br><br>


    <?php
    if(@$showdata>0){
        $recdata=mysqli_fetch_object($executeSql);
    }
    ?>
    <table width="100%" border="1">
<tr>
    <th>ID</th>
    <th>Blood Group</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Address</th>
    <th>Area</th>
</tr>
<tr>
    <td><?php echo $recdata->id; ?></td>
    <td><?php echo $recdata->blood_group;?></td>
    <td><?php echo $recdata->name; ?></td>
    <td><?php echo $recdata->gender; ?></td>
    <td><?php echo $recdata->age; ?></td>
    <td><?php echo $recdata->address; ?></td>
    <td><?php echo $recdata->area; ?></td>
</tr>
    </table>
    
</body>
</html>