<?php 
$value = $_POST["value"];

echo "<table border=\"1\">";
for($i = 0; $i <= $value; $i++){
	echo "<tr>";
	for($j = 0; $j <= $value; $j++){
		$val = $i * $j;
		
		if($i == 0){ 
			if($j == 0){ echo "<td></td>"; continue;}
			else { $val = $j; }
		}
		else if($val == 0){ $val = $i; }
		
		echo "<td>" . $val . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
 
?> 