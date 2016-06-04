<?php
	session_start();
	include("connection.php");
	$db= conectar();
	$rut = mysqli_real_escape_string($db, $_POST['rutSelec']);
	$_SESSION['killOrupdate']=$rut;
	
	$query="select rut, pass, privilegio from usuario where rut like '".$rut."';";
	if(!$resultado= $db->query($query)){
		print "error en la consulta por rut";
		exit();
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Eleccion</title> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body id="fondo">

	<div class="container">
		<br>
		<div class="jumbotron">
			<p>Usuario Encontrado: <?php echo $_SESSION['killOrupdate'] ?> datos</p>
			<table class="table table-bordered">
				<thead>
					<tr class="success">
						<td>RUT</td>
						<td>PASSWORD</td>
						<td>PRIVILEGIO</td>
					</tr>
				</thead>
				<tbody>
					<?php $us = $resultado-> fetch_assoc();  ?>
						<tr>
							<td> <?php echo $us['rut']; ?></td>
							<td> <?php echo $us['pass']; ?></td>
							<td>
								<?php if($us['privilegio'] == 1){
										echo "Profesor";
									  }else{
										echo "Estudiante";
									  } ?> 
							</td>
						</tr>
					
				</tbody>
			</table>
			<div class="row">
				<div class="col-xs-6">
					<form action="update.php" class="form" method="POST">
						<input type="submit" class="btn btn-primary" value="Modificar Usuario Seleccionado">
					</form>
				</div>
				<div class="col-xs-6">
					<form action="delete.php" class="form" method="POST">
						<input type="submit" class="btn btn-primary" value="Borrar Usuario Seleccionado">
					</form>
				</div>
			</div>
			
			
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>