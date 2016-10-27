<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Táboa de multiplicar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		#formulario {margin-top: 50px;}
	</style>
</head>



<?php 
//$numero=$_POST["numero"];// recolle o parámetro número pasado por método GET, pero non fai comprobación. Non recomendable.

//se o formulario se envía por GET cambiamos o array $_POST por $_GET

//A funcion isset(var) permite comprobar si existe unha variable ou se nos pasaron un parámetro

$erro="";//supoñemos que nn hay erro ó principio

if (isset($_POST["numero"])) {
	$numero=$_POST["numero"];
	if ($numero=="") {
		$erro="<p class='bg-danger text-danger'>Debes poñer un número</p>";
	}
	elseif (!is_numeric($numero)) { //se non é numérico
		$erro="<p class='bg-danger text-danger'>Número incorrecto. Debe ser numérico</p>";
	}
}
else
	$erro="<p class='text-danger'>Non se pasou ningún número</p>";
 ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">Táboa de multiplicar</h1>
			</div>
		</div>
		<div class="row" id="formulario">
			<div class="col-xs-4 col-sm-2 col-sm-offset-5 text-center">

		<?php 
		if ($erro=="") { //if de comprobacion do erro
						//xeramos a táboa só se non hai erro

		 xerarTaboa($numero); 
			} //fin da comprobación do erro
			else //se $erro non é igual a "", significa que hai erro
			echo $erro; //mostramos o html do erro

			?>

			<a href="php04-tablaMult.php" class="btn btn-primary text-center">Volver</a>
			</div>
		</div>
	</div>
</body>
</html>