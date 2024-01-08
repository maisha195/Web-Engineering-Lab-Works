<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Basic</title>
</head>
<body>
	<?php
		define("PI",3.14159);
		echo "<h2 style='color: blue;'>Md. Masudul Islam</h2>";
		$a=10; $b=25.68; // Single Comment
		$c = $a+$b*PI;
		echo "Summation: ". "<b>".$c."</b>";
		$r = "<br />Name";
		$s = '<br />You';
		echo $r;
		echo $s;
		/* Multiline Comment */
		$des = "<table border='1'>
					<tr>
						<th>A</th>
						<th>B</th>
						<th>C</th>
					</tr>
					<tr>
						<td>1</td>
						<td>2</td>
						<td>3</td>
					</tr>
				</table>";
		echo $des;
	?>
<hr>

<form action="" method="POST">
	input 1: <input type="text" name="n1" /><br />
	input 2: <input type="text" name="n2" /><br />
	<input type="submit" name="btn" value="Calculate" />
</form>
<?php
	if(isset($_POST['btn'])=="Calculate"){
		$a=$_POST['n1'];
		$b=$_POST['n2'];
		$sum=$a+$b;
		echo "<h3>Result: $sum</h3>";
	}
?>
<hr>
<form method="POST">
	Number 1:<input type="text" name="number[]" />
	Number 2:<input type="text" name="number[]" /><br>
	Number 3:<input type="text" name="number[]" />
	Number 4:<input type="text" name="number[]" /><br>
	Number 5:<input type="text" name="number[]" />
	Number 6:<input type="text" name="number[]" /><br>
	<input type="submit" name="btnMax" value="Find Summation" />
</form>
		<!-- PHP Action Script -->
		<?php
			if(isset($_POST['btnMax'])){
				@$n=$_POST['number'];			
				$sum=0;
			    for($i=1; $i<=6; $i++) {
			    	$sum += $n[$i];
			    	//echo "Values:".$n[$i].", ";
			    }
			    echo "Summation:".$sum;
			}
		?>
</body>
</html>

<?php
	$ar=array("One", "Two");
	echo $ar[1];

	$capitals = array("CO" => "Denver", "AR" => "Little Rock");
	echo $capitals['CO'];

?>