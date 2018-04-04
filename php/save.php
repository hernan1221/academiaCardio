<?php
	require_once 'config.php';
	
	$nombre = utf8_decode($_POST["inputNombre"]);
	$apellido = utf8_decode($_POST["inputApellido"]);
	$correo = utf8_decode($_POST["inputCorreo"]);
	$codigo = utf8_decode($_POST["inputCodigo"]);
    $cedula = utf8_decode($_POST["inputCedula"]);
	$contrasena = utf8_decode($_POST["inputContraDos"]);

	if( $nombre == "" || $email == "" || $contrasena == ""){
	}else{
		$insert = mysqli_query($con,'INSERT INTO ac_form(nombres,apellidos,correo,codigo,cedula,contrasena) VALUES ("'.$nombre.'","'.$apellido.'","'.$correo.'","'.$codigo.'","'.$cedula.'","'.$contrasena.'")')or die("no insertó : ". mysql_error());
	}	
?>