<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Xerar Táboa de Multiplicar</title>
	<?php
function xerarTaboa($numero) {
echo "<h4 class='text-center'>Táboa do $numero</h4>";
echo "<table class='table table-condensed table-striped'>";
for ($i=0; $i <=9 ; $i++) { 
	echo "<tr>\n";
 	echo "\t<td>$numero</td>\n" ;
 	echo "\t<td>x</td>\n";
 	echo "\t<td>$i</td>\n";
 	echo "\t<td>=</td>\n";
 	echo "\t<td class='text-right'>".$numero*$i."</td>\n";
 	echo "</tr>\n";
 } 
echo "</table>";
}
?>
</head>
<body>
<div class="container">
	
	
	<?php 
	for ($i=1; $i <=10 ; $i++) { 
		if ($i==1 or $i==6) {
			echo "<div class='row'>\n";
			echo "<div class='col-sm-1'></div>\n";
		}
		echo "\t<div class='col-sm-2'>\n";
	 	xerarTaboa($i);
	 	//echo "\ttáboa $i\n";
	 	echo "</div>";
	 
	 if ($i==5 or $i==10) {
			//echo "<div class='row'>";
			echo "</div>\n"; //pecha o div row
		}
	}
		 ?>
</div>
</body>
</html>