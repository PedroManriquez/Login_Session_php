<?php 
	include("connection.php");
	$db=conectar();
	# obtenemos los valores ingresados por el admin mediante el POST y evitando inyeccion sql
	$rut= mysqli_real_escape_string($db, $_POST['rut']);
	# $db->escape_string("consulta");
	$pass= mysqli_real_escape_string($db, $_POST['clave']);
	$privilegio= mysqli_real_escape_string($db, $_POST['tipo']);
	#preparamos consulta insert para tabla usuario
	$insert="insert into usuario (rut, pass, privilegio) values ('".$rut."', '".$pass."', '".$privilegio."')";
	#Ejecutamos la consulta, si tiene errores se imprime el error
	if(!$resultado = $db->query($insert)){
		print "Error en la consulta.";
		exit;
	}
	
	header('location: menuAdmin.php');
	
?>
