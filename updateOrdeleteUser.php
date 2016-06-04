<?php
	include("connection.php");
	$db=conectar();
	$select="select rut from usuario where privilegio in ( 1 , 2 );";
	if(!$result= $db->query($select)){
		print "Error en la consulta Select ejecutada";
		exit();
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Usuario</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<legend>
			<h3 ="noticia"> Actualizar a participante</h3>
		</legend>	
	</div>
	<div class="container">
		<div class="jumbotron">
			<form action="decision.php" method="POST">

				<select name="rutSelec" id="" class="btn btn-primary dropdown dropdown-toggle">
					<?php while($rut = $result->fetch_assoc()) { ?>
					<option value=<?php echo $rut['rut'];?> ><?php echo $rut['rut']; ?></option>
					<?php } ?>
				</select>
				<input type="submit" value="enviar" class="btn btn-primary">
			</form>
		</div>
	</div>
	<form action=""></form>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>