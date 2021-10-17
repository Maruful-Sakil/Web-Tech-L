<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>conversion-rate</title>
</head>
<body>

	<h1>Page 2 [Conversion Rate]</h1>
	<br>
	<h2>Conversion Site</h2>
	<br>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	1. <a href="Home.php">Home</a>
	2. <a href="Conversion-rate.php">Conversion Rate</a>
	3. <a href="History.php">History</a>
	<br>
	<h2>Conversion Rate:</h2>
	<br>
	Category:<input type="text" name="category">
	Unit:<input type="text" name="unit">
	Rate:<input type="text" name="rate">
	<input type="submit" name="submit" value="Submit">
	<br><br>
	</form>
	<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$category = $_POST['category'];
		$unit = $_POST['unit'];
		$rate = $_POST['rate'];

		if(empty($category) or empty($unit) or empty($rate)){
			echo "All fields required";
		}
			else{
				$category = validate($category);
				$unit = validate($unit);
				$rate = validate($rate);

				$handle = fopen("data.json", "a");
				$arr1 = array('category' => $category, 'unit' => $unit, 'rate' => $rate);
				$arr1 = json_encode($arr1);

				fwrite($handle, $arr1 . "\n");
				echo "Successfully inserted";
			}
	}
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	?>
	<?php
		$handle = fopen("data.json", "r");
		$data = fread($handle, filesize("data.json"));
		$exploded = explode("\n", $data);
		$arr1 = array();
		for($i = 0; $i < count($exploded); $i++)
		{
			$decode = json_decode($exploded[$i]);
			array_push($arr1, $decode);
		}		

	?>

	<table border="1">
		<thead>
			<tr>
				<th>Category</th>
				<th>Unit</th>
				<th>Rate</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for($j = 0; $j < count($arr1) -1; $j++){
				echo "<tr>";
				echo "<td>";
				echo $arr1[$j]->category;
				echo "</td>";
				echo "<td>";
				echo $arr1[$j]->unit;
				echo "</td>";
				echo "<td>";
				echo $arr1[$j]->rate;
				echo "</td>";
				echo "</tr>";
			}

			?>
		</tbody>
	</table>

</body>
</html>