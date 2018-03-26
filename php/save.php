<?php
	require_once 'config.php';
	
	$nombre = utf8_decode($_POST["inputNombre"]);
	$apellido = utf8_decode($_POST["inputApellido"]);
	$email = utf8_decode($_POST["inputCorreo"]);
    $fecha = utf8_decode($_POST["inputFecha"]);
	$contrasena = utf8_decode($_POST["inputContraDos"]);

	if( $nombre == "" || $email == "" || $contrasena == ""){
	}else{
		$insert = mysqli_query($con,'INSERT INTO ac_form(nombres,apellidos, fecha_de_nacimiento, correo,contrasena) VALUES ("'.$nombre.'","'.$apellido.'","'.$email.'","'.$fecha.'","'.$contrasena.'")')or die("no insertó : ". mysql_error());
	}	
?>