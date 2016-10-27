<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 01</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		#taboaDias {
			width: 200px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<h1>Probando PHP</h1>
	<?php 
	//variables:
	$dia=0; //variable para xerar índices  dos días da semana no array
	$diaSemana=array("","luns","martes","mercores","xoves","venres","sabado","domingo");
	/*
	equivalente a:
	$diaSemana[0]=""; //deixamos a 0 sen usar para que o luns esté con indice 1 (día 1 da semana)
	$diaSemana[0]="luns";
	$diaSemana[1]="martes";
	...
	*/
	 ?>

	 <h3>Días da semana(formato lista):</h3>
	 <ul>

<?php 
	 	for ($dia=1; $dia <=7 ; $dia++) { 
	 		echo "\t\t<li>$diaSemana[$dia]</li>\n";
	 	}
?>

	 </ul>


	 	 <h3 class="text-center">Días da semana(formato taboa):</h3>
	 <table id="taboaDias" class="table">
	 <tr>
	 	<th>Día da semana</th>
	 </tr>

<?php 
	 	for ($dia=1; $dia <=7 ; $dia++) { 
	 		echo "\t\t<tr>\n\t\t\t<td>$diaSemana[$dia]</td>\n\t\t</tr>\n";
	 	}
?>

	 </table>
</body>
</html>