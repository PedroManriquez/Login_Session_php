<?php 
	include("connection.php");
	$db = conectar();
	
	$rut= mysqli_real_escape_string($db, $_POST['rut']);
	$pass= mysqli_real_escape_string($db, $_POST['contra']);

	$sql = "select * from usuario ";
	if(!$resultado = $db->query($sql)){
		print "Error en la consulta.";
		exit;
	}
	#iteraremos cada fila que retorne la consulta en sql de esta forma podremos comparar en todos los
	#registros si se encuentra el usuario ingresando al sistema
	while($usuario = $resultado-> fetch_assoc()){

		if($rut == $usuario['rut'] && $pass == $usuario['pass']){
			#Como ingresamos en la validacion del usuario iniciamos la sesion y comparamos el privilegio
			session_start();
			if($usuario['privilegio']==0){
				#dependiendo del privilegio pasaremos las distintas variables de sesion
				$_SESSION['rut']=$usuario['rut'];
				$_SESSION['contraseña']=$usuario['pass'];
				$_SESSION['privilegio']=$usuario['privilegio'];
				header('location: menuAdmin.php');
			}else{
				if($usuario['privilegio']==1){
					$_SESSION['rut']=$usuario['rut'];
					$_SESSION['contraseña']=$usuario['pass'];
					$_SESSION['privilegio']=$usuario['privilegio'];
					header("location: profesorMenu.html");
				}else{
					$_SESSION['rut']=$usuario['rut'];
					$_SESSION['contraseña']=$usuario['pass'];
					$_SESSION['privilegio']=$usuario['privilegio'];
					header("location: estudianteMenu.html");
				}
			}
		}
	}

	#header('location: login.html');




?>