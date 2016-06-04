<?php 
	include("connection.php");
	$db= conectar();
	session_start();

	$selectupdate= "select * from usuario where rut like '".$_SESSION['killOrupdate']."';";
	if(!$resultadoQuery = $db->query($selectupdate)){
		echo " Error en la consulta para actualizar";
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<div class="jumbotron">
			<legend><h3>Actualizar Participante RUT: <?php echo $_SESSION['killOrupdate'];?></h3></legend>
			<?php $updateUser= $resultadoQuery->fetch_asocc();?>
			<form action="actualizar.php" class="form-horizontal" method="POST">
		   		<div class="form-group">
		      		<label class="control-label col-sm-3">RUT : </label>
		      		<div class="col-sm-6">
		        		<input value=<?php echo $resultadoQuery['rut']; ?> type="text" class="form-control" placeholder="Nuevo RUT" >
		      		</div>
		    	</div>
		    	<div class="form-group">
		      		<label class="control-label col-sm-3" for="pwd">Contraseña : </label>
		      		<div class="col-sm-6">          
		        		<input value=<?php echo $resultadoQuery['pass']; ?> type="text" class="form-control" placeholder="Nueva contraseña">
		      		</div>
		  		</div>
		  		<div class="form-group">
		      		<label class="control-label col-sm-3" for="pwd">Privilegio:</label>
		      		<div class="col-sm-6">          
		        		<input value=<?php echo $resultadoQuery['privilegio']; ?> type="text" class="form-control" placeholder="Nuevo Rol">
		      		</div>
		  		</div>
		  		<div class="form-group">
		      		<div class="col-sm-6">          
		        		<input type="submit" class="btn btn-primary" ">
		      		</div>
		  		</div>
		  	</form>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>