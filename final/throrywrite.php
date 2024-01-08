<!-- theory code -->

<!-- first db connect code -->
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="db_blood";
$dbcon=mysqli_connect("$host","$user","$pass","$dbname");
?>
<!-- -------------------------------------- -->
<!-- second get data from database in php code -->
<?php
require_once("dbcon.php");
if(isset($_POST['srcbtn'])=="Search"){
    $bloodgroup=$_POST['srchBlood'];
    $srchQury="SELECT * FROM tbl_blood WHERE blood_group='$bloodgroup'";
    $executeSql=mysqli_query($dbcon,$srchQury);
    $showdata= mysqli_num_rows($executeSql);
}
?>
<!-- ------------------------------------------------>
<!-- third step show data in index page -->
<?php
    if(@$showdata>0){
        $recdata=mysqli_fetch_object($executeSql);
        echo $recdata->blood_group;
        echo "<br>";
        echo $recdata->id;
        echo "<br>"; //newline <br>
        echo $recdata->name;
         echo "<br>"; //newline
        echo $recdata->gender; 
    }
    ?>