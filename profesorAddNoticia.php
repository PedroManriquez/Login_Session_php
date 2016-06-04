<?php
	# iniciamos sesion y conectamos con base de datos
	session_start();
	include("connection.php");
	$db = conectar();

	# obtenemos los valores ingresados por el profesor mediante el POST y evitando inyeccion sql
	$title= mysqli_real_escape_string($db, $_POST['titulo']);
	$desc= mysqli_real_escape_string($db, $_POST['desc']);
	$ima= mysqli_real_escape_string($db, $_POST['imagen']);
	#preparamos la consulta para luego ejecutarla
	$consulta="insert into noticia (rut_autor, titulo, detalle, imagen) values ('".$_SESSION['rut']."' ,'".$title."', '".$desc."', '".$ima."' ) ";
	#ejecutamos la consulta
	if(!$resultado = $db->query($consulta)){
		print "Error en la consulta.";
		exit;
	}
	#una vez agregada la noticia automaticamente se redirige al archivo donde se muestran
	header('location: profesorVerNoticia.php');



?>