<?php 
	session_start();

	include("connection.php");
	$db = conectar();

	$sql = "select * from noticia";
	if(!$resultado = $db->query($sql)){
		print "Error en la consulta.";
		exit();
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Noticias</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body id="fondo">
	<div class="container">
		<legend ><h1 class="noticia" align="center">Noticias ...</h1></legend>
	</div>
	
	<!--Todo este divisor lo repetiremos mientras existan filas de retorno al ejecutar la consulta-->
	<?php while($noticia = $resultado-> fetch_assoc()) {?>

		<div class="container">
			<div class="row" >
				<div class="row claseAlgo">
					<div class="col-xs-2 columna">
					<img class="imagen" src=<?php echo $noticia['imagen'] ?> >
					</div>
					<div class="col-xs-10 columna"><h1 class="noticia"><?php echo $noticia['titulo']; ?></h1><p class="noticia"><?php echo $noticia['detalle']?></p></div>
				</div>
			</div>
		</div>
		<br>
	<?php } ?>
	<!-- Finalizamos la iteracion-->
	<br>
	<div class="container row">
		<div class="col-xs-3"></div>
		<div class="col-xs-3">
			<form action="addNoticia.html" class="form" method="POST">
				<p class="p"><input type="submit" class="btn btn-primary" value="Agregar Noticia"></p>
			</form>
		</div>
		<div class="col-xs-3">
			<form action="profesorMenu.html" class="form" method="POST">
					<p class="p"><input type="submit" class="btn btn-primary" value="Volver al Menu"></p>
			</form>
		</div>
		<div class="col-xs-3">
			<form action="cerrar.php" class="form" method="POST">
				<p class="p"><input type="submit" class="btn btn-primary" value="Cerrar Sesion"></p>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</body>
</html>
