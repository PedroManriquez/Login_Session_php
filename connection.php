<?php
	#Conexion con el MySQL
	function conectar(){
		$server="localhost";
		$user="root";
		$pass="1234";
		$db="internet";
		$db= new mysqli($server, $user , $pass, $db);
		if($db->connect_errno >0){
			die('Unable to connect to database ['.$db->connect_error.']');
		}

		return $db;
	}	
?>