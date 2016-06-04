<?php
	include("connection.php");
	$db= conectar();
	$select="select * from usuario where privilegio in (1 , 2)";
	if(!$resultado = $db->query($select)){
		print "Error en la consulta.";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mostrar Personas</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body id="fondo">
	<div class="container">
		<legend>
			<h3 align="center" class="noticia">Personal en Sistema</h3>
		</legend>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td class="info">RUT</td>
					<td class="info">PASSWORD</td>
					<td class="info">ESTATUS</td>
				</tr>
			</thead>
			<tbody>
				<?php while($persona = $resultado-> fetch_assoc()) { ?>
				<tr>
					<td class="success"> <?php echo $persona['rut'];?> </td>
					<td class="success"> <?php echo $persona['pass']?> </td>
					<td class="success"> <?php if($persona['privilegio'] == 1){ echo "Profesor";}else{ echo "Estudiante";}?> </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<br>
	<div class="container row">
		<div class="col-xs-3"></div>
		<div class="col-xs-3">
			<form action="menuAdmin.php" class="form" method="POST">
				<p class="p"><input type="submit" class="btn btn-primary" value="Volver al Menu"></p>
			</form>
		</div>
		<div class="col-xs-3"></div>
		<div class="col-xs-3">
			<form action="cerrar.php" class="form" method="POST">
				<p class="p"><input type="submit" class="btn btn-primary" value="Cerrar Sesion"></p>
			</form>
		</div>
	</div>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>