<?php 
	require"../misfunciones.php";
	$registro=isset($_GET['id'])?$_GET['id']:false;
	// si se ejecuta la url:delete.php?id=1 or 1
	// se borrarían todos  los registros. Esto es inyección SQL

	//para más control debemos asegurarnos que nos pasan un número solo.
	// if($registro)  solo si me mandan un id. no controlada inyección SQL

	if(is_numeric($registro)) { //con esto controlo inyección SQL
		$sqL="DELETE FROM alumnos WHERE registro=$registro"; 
		$c=conectarBaseDatos();
		$result=enviarConsulta($c,$sqL);
	}
	header('Location: index.php'); // esto redirecciona a la página indicada

 ?>