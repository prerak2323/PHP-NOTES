<!DOCTYPE html>
<html>
<head>
	<title>Matrix in Table Form</title>
</head>
<body>
	<form method="post">
		<label>rows</label>
		<input type="text" name="rows">
		<label>cols</label>
		<input type="text" name="cols">
		<input type="submit" value="create matrix">
        <input type="reset">
	</form>
	<?php
			$rows = $_POST['rows'];
			$cols = $_POST['cols'];
			$matrix = array();

			echo "<table>";
			for($i=0; $i<$rows; $i++){
				echo "<tr>";
				for($j=0; $j<$cols; $j++){
                    $array[$i][$j]=rand(1,9);
					echo "<td>".$array[$i][$j]."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";

        echo "<hr>";
        echo "sum of diagonal elements";
		$dsum=0;
        for($i=0; $i<$rows; $i++){
            for($j=0; $j<$cols; $j++){
                if($i==$j){
                $dsum=$array[$i][$j]+$dsum;
                }
            }
        
        }
     echo " ".$dsum;

	?>
</body>
</html>
