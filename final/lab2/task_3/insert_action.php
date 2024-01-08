<?php
session_start();
require_once("con_db.php");
if (isset($_POST['btnInfo']) == "Insert") {
	$ID = $_POST['ID'];	
	$name = $_POST['name'];	
	$program = $_POST['program'];	
	$intake = $_POST['intake'];	
	$blood = $_POST['blood'];
	$barcode = substr(md5($ID),0,10);
	$valid = date_format(date_create($_POST['validity']),"Y-m-d");
	$photo = $_FILES["fileToUpload"]["name"];
	/*+++++Photo Upload+++++*/
	$target_dir = "photos/";
	$target_file = $target_dir . basename($photo);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
	    $_SESSION['msg'] = "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	} else {
	    $_SESSION['msg'] = "File is not an image.";
	    $uploadOk = 0;
	}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  $_SESSION['msg'] = "Sorry, file already exists.";
	$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		$_SESSION['msg'] = "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$_SESSION['msg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['msg'] = "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
	/*Insert into tbl_info*/
	$insertData1 = "'$ID','$name','$program','$intake','$blood','$barcode','$valid','$photo'";
	$insertSQL1 = "INSERT INTO tbl_info VALUES($insertData1)";
	$insertQuery1 = @mysqli_query($dbCon,$insertSQL1) or die("Error in Table Info Insertion: ".mysqli_error($dbCon));
	/*Insert into tbl_user*/
	$insertData2 = "'$ID','".rand(1111,9999)."','0'";
	$insertSQL2 = "INSERT INTO tbl_user VALUES($insertData2)";
	$insertQuery2 = @mysqli_query($dbCon,$insertSQL2) or die("Error in Table User Insertion: ".mysqli_error($dbCon));
	}
}
	/*Success or Error Message*/
	if($insertQuery1 && $insertQuery2 && $uploadOk==1){
		$_SESSION['msg'] = "<h4 style='color:blue'>Data Succefully Inserted</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'>Not Inserted</h4>";
	}
	header('Location: ' . BASE);
}
?>