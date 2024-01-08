<?php session_start(); ?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="author" content="Md. Masudul Islam Ibrahim">
    <title>CSE 458-Lab:09</title>
</head>
<body>
	<h1>PHP CRUD:: Introduce Different types of Insertion in PHP-MySQL</h1>
	<hr>
	<!-- Problem + Solution: 001 [START]-->
	<h3>
		<span style="color: green;"> Problem 1: Write a PHP-MySQL program to Insert Some data into a Database Table</span>
	<h3>
		<h3>Step by Step Task: </h3>
		<div style="width: 40%; background-color:  #d5d8dc; padding: 10px 25px;">
			<p><span style="color:#2980b9"><u><span style="font-size:24px"><strong>Procedure Step by Step for INSERTION</strong></span></u></span><br />
			<span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><em><span style="font-size:14px">1. Design Input FORM<br />
			2. Add Action Page/ Call Action Page (php type Page)<br />
			3. Create/Write Database Connection Code in PHP<br />
			4. Go to action Page:<br />
			&nbsp;&nbsp;&nbsp;&nbsp; 4.1. Connect Database with action Page<br />
			&nbsp;&nbsp;&nbsp;&nbsp; 4.2. If Button (Insert) Click<br />
			&nbsp;&nbsp; &nbsp;a. Collect Values from FORM in variables<br />
			&nbsp;&nbsp; &nbsp;b. Serialize the variable input as per Data Tables<br />
			&nbsp;&nbsp; &nbsp;c. Write SQL for Insertion<br />
			&nbsp;&nbsp; &nbsp;d. Execute Query<br />
			&nbsp;&nbsp; &nbsp;e. If Success Then<br />
			&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i. Show Success Message<br />
			&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Else<br />
			&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;ii. Error Message<br />
			5. Go To Main Page</span></em></span></p>
		</div>
	<hr>
	<h3><span style="color: red;">Solution</span></h3>
	<!--Procedure: Try to write the PHP code. -->
		<div>
			<span style="text-align: center"><h3>Insert into Information & User Table</h3>
			<?php 
				if(@$_SESSION['msg']!=""){
					echo $_SESSION['msg']; 
					echo $_SESSION['msg']="";
				}
			?>
			</span>
			<form action="insert_action.php" method="post" enctype="multipart/form-data">
				<table align="center">
					<tr>
						<td> 
							<label>ID:: </label>
							<input type="text" name="ID" />
						</td>
						<td>
							<label>| NAME:: </label>
							<input type="text" name="name" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>PROGRAM:: </label>
							<input type="radio" name="program" value="CSE" /> CSE | 
							<input type="radio" name="program" value="EEE" /> EEE |
							<input type="radio" name="program" value="Textile" /> Textile
						</td>
						<td>
							<label> | INTAKE:: </label>
							<input type="number" name="intake" />
						</td>
					</tr>
					<tr>
						<td> 
							<label>BLOOD:: </label>
							<select name="blood">
								<option value="-99">Select Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
						</td>
						<td>
							<label>| VALIDITY: </label>
							<input type="date" name="validity" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</td>
						<th colspan="2"><input type="submit" name="btnInfo" value="Insert" /></th>
					</tr>
				</table>
			</form>
		</div>
	<!-- Problem + Solution: 001 [END]-->
	<hr>
	<h3>
		<span style="color: blue;"> Task 2: Write a PHP-MySQL program insert data of following form. Follow these steps:
			<ul>
				<li>Create a database name: "db_crud"</li>
				<li>Create a table name: tbl_insert</li>
				<li>Add fields according to given FORM's fields and HIDDEN input</li>
				<li>Write PHP-MySQL code to insert data</li>
			</ul>
		</span>
		<h3><span>Sample Output:</span></h3>
		<img src="Form.png" alt="sample One" width="35%" />
	<h3>
</body>
</html>