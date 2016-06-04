<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu Profesor</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body id="fondo">
	<br>
	<div class="container jumbotron">
		<legend><h3 align="center">Bienvenido Admin <?php echo $_SESSION['rut']; ?></h3></legend>
		<br>
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-3">
				<form action="agregarPersona.html" class="form" method="POST">
					<input type="submit" class="btn btn-primary" value="Agregar Participante">
				</form>
			</div>
			<div class="col-xs-3">
			</div>
			<div class="col-xs-3">
				<form action="showPersona.php" class="form" method="POST">
					<input type="submit" class="btn btn-primary" value="Mostrar Participantes">
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-3">
				<form action="updateOrdeleteUser.php" class="form" method="POST">
					<input type="submit" class="btn btn-primary" value="Modificar Participante">
					<p>--a&uacute;n no disponible--</p>
				</form>
			</div>
			<div class="col-xs-3">
			</div>
			<div class="col-xs-3">
				<form action="updateOrdeleteUser.php" class="form" method="POST">
					<input type="submit" class="btn btn-primary" value="Eliminar Participante">
					<p>--a&uacute;n no disponible--</p>
				</form>
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-xs-5">
			</div>
			<div class="col-xs-3">
				<form action="cerrar.php" class="form" method="POST">
					<input type="submit" class="btn btn-primary" value="Cerrar Sesion">
				</form>
			</div>
			
		</div>
	</div>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
