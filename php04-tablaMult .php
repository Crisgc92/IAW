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
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">Táboa de multiplicar</h1>
			</div>
		</div>
		<div class="row" id="formulario">
			<div class="col-xs-12 col-sm-4 col-sm-offset-4">
				<form action="php05-tablaMult.php" method="POST">
					<div class="form-group">
						<label for="numero">táboa do nº:</label>
						<input class="form-control" type="text" id="numero" name="numero">
					</div>

					<button type="submit" class="btn btn-primary">Xerar Táboa</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>