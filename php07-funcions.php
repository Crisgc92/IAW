<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funcions</title>
</head>
<body>
	
	<?php 
	function sumar(&$a,$b) // $a argumento por referencia, $b por valor
	{
		$suma=$a+$b;
		$a=0;$b=0;
		return $suma;
	}

	function pVariable() // número de parámetros variable
	{
		$parametros=func_get_args();

		$resposta="<br>Nº de parámetros: ".count($parametros);
		foreach ($parametros as $key => $value) {
			$resposta.="<br> Par. nº ".++$key." = $value";
		}
		return $resposta;
	}
 	
 	function capicua($cadea)
 	{
 		//devolve true si a cadea é caipua, e false en caso contrario
 		//strlen(string) devolve o nº de caracteres dunha cadea
 		$ncar=strlen($cadea);
 		$cadeaInversa="";
 		for ($i=$ncar-1; $i >=0 ; $i--) {
 			$cadeaInversa.=$cadea[$i];

 		}
 		//echo "<br>$cadea<br>$cadeaInversa";
 		if ($cadea==$cadeaInversa)
 			return "<p>A cadea <b>$cadea</b> É capicúa</p>";
 		else
 			return "<p>A cadea <b>$cadea</b> NON é capicúa</p>";
 		echo "<br>$cadea<br>$cadeaInversa";
 	}
	
	function capicua2($cadea) //aproveitando funcións especificas de PHP
	{
		//strrev(string) devolve a cadea inversa dunha cadea
		if ($cadea==
			)
 			return "<p>A cadea <b>$cadea</b> É capicúa</p>";
 		else
 			return "<p>A cadea <b>$cadea</b> NON é capicúa</p>";
 		echo "<br>$cadea<br>$cadeaInversa";
	}
	$a=6;
	$b=5;
	echo "<p>Valores antes de chamar á función: \$a=$a \$b=$b</p>";
	echo "<p>$a + $b = ".sumar($a,$b)."</p>";
	echo "<p>Valores despois de chamar á función: \$a=$a \$b=$b</p>";

	echo"<hr>";

	echo "<p>Chamamos á función pVariable con 2 parámetros:".pVariable(1,2)."</p>";
	echo "<p>Chamamos á función pVariable con 0 parámetros:".pVariable()."</p>";
	echo "<p>Chamamos á función pVariable con 5 parámetros:".pVariable("a","b",30,"d","z")."</p>";
	echo"<hr>";

	echo "<p>Probando función capicua</p>";
	echo capicua("ABCDEFGHI");

	$cadea="ABCDEFG";
	echo strlen($cadea);




	 ?>
</body>
</html>