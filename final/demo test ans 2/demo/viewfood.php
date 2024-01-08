<?php
session_start();
require_once("conn.php");
$sql = "SELECT id, name, price FROM tbl_food_info";
$result = mysqli_query($dbconnections, $sql);

if (mysqli_num_rows($result) > 0) {

echo "<h1>Food List show Table</h1>";

    echo "<table border='1'>";
    echo "<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["price"]."</td>

        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}
?>
