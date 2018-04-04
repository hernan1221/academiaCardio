<?php
	require_once 'config.php';
	
	$nombre = utf8_decode($_POST["inputNombre"]);
	$apellido = utf8_decode($_POST["inputApellido"]);
	$codigo = utf8_decode($_POST["inputCodigo"]);
    $cedula = utf8_decode($_POST["inputCedula"]);
	$contrasena = utf8_decode($_POST["inputContraDos"]);

	if( $nombre == "" || $email == "" || $contrasena == ""){
	}else{
		$insert = mysqli_query($con,'INSERT INTO ac_form(nombres,apellidos, cedula, codigo,contrasena) VALUES ("'.$nombre.'","'.$apellido.'","'.$cedula.'","'.$codigo.'","'.$contrasena.'")')or die("no insertó : ". mysql_error());
	}	
?>