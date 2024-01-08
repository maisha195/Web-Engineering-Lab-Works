<?php
require_once("dbcon.php");
if(isset($_POST['srcbtn'])=="Search"){
    $bloodgroup=$_POST['srchBlood'];
    $srchQury="SELECT * FROM tbl_blood WHERE blood_group='$bloodgroup'";
    $executeSql=mysqli_query($dbcon,$srchQury);
    $showdata= mysqli_num_rows($executeSql);
}
?>