<!DOCTYPE html>
<html>
<head>
	<title>Matrix in Table Form</title>
</head>
<body>
	<form method="post">
		<label>Number of rows:</label>
		<input type="text" name="rows">
		<label>Number of columns:</label>
		<input type="text" name="cols">
		<br>
		<label>Matrix elements:</label>
		<br>
		<textarea name="elements" rows="5" cols="30"></textarea>
		<br>
		<input type="submit" value="Create Matrix">
	</form>
	<?php
		if(isset($_POST['rows']) && isset($_POST['cols']) && isset($_POST['elements'])){
			$rows = $_POST['rows'];
			$cols = $_POST['cols'];	
			$elements = explode(',', $_POST['elements']); //php decides the data type of the input feild here $elements is string
//			The explode() function scans the input string and splits it whenever it encounters the specified delimiter. It then returns an array of substrings
//			echo count($elements);
			if(count($elements) == $rows * $cols){ 
				//converting the element subarray to 2D 
				echo "<table>";
				$index=0;
				for($i=0; $i<$rows; $i++){
					echo "<tr>";
					for($j=0; $j<$cols; $j++){
						echo "<td>".$elements[$index]."</td>";
						$index++;
					}

					echo "</tr>";
				}
				echo "</table>";
			}
			else{
				echo "Number of elements doesn't match the matrix dimensions!";
			}
		} 
		
	?>
</body>
</html>
