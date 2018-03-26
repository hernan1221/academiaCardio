<?php
	require_once 'php/config.php';
	

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	   <!-- Bootstrap CSS -->

	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	
 <!-- Abro menu bar -->
<div class="menuBar "> 
 	<!-- Abro container -->
	<div class="container-fluid">

		 <!-- Abro menu row -->	
		<div class="row d-flex align-items-center">	

		 	<!-- Abro col -->	
		 	
			<div class="col-lg-6">
			<!-- abro col de la imagen logo-->
			<div class="col-lg-4 ">
				
			<img src="img/logoAcademia.png" class="imgLogo">
			
			
			</div>
			<!-- cierro col de la imagen logo-->
			</div>
			<!-- cierro col -->


			<!-- Abro col -->	
		 	
			<div class="col-lg-6 ">

		 		<div id="main-menu">
		            <ul class="nav justify-content-around ">
		              <li class="nav-item">
		                <a class="nav-link" href="#">Inicio</a>
		                
		              </li>
		        
		              <li class="nav-item">
		                <a class="nav-link " href="#">Cardio blog</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" href="#">Contacto</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link menuActivo" href="#">Login / Registro</a>
		              </li>

		              <li class="">
		              		<ul class="nav nav-tabs">
							  
							  <li class="nav-item  dropleft">
							    <a class="" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"  >

								<i class="fas fa-bars fa-2x text-secondary"></i>

							    </a>
							    <div class="dropdown-menu ">
							      <a class="dropdown-item" href="#">Diabetes y enfermedad cardiovascular</a>
							      <a class="dropdown-item" href="#">Lipidos</a>
							      <a class="dropdown-item" href="#">Enfermedad coronaria</a>
							      <a class="dropdown-item" href="#">Insuficiencia cardíaca</a>
							      <a class="dropdown-item" href="#">Anticoagulación</a>
							      <a class="dropdown-item" href="#">Cardiología preventiva</a>
							    </div>
							  </li>
							  
							</ul>
		              </li>
		            </ul>
		        </div>

			</div>

			<!-- cierro col -->


		</div> 
		<!-- cierro Row -->

		<!-- cierro Row -->
	</div>
    <!-- Cierro container -->
</div>


<div class="container">
			<p class="col-lg-3 interna-index">Inicio / <a href=""> Registro</a></p>	
	<div class="row seccionInicioRegistro">

<div class="col-lg-6 no-gutters">

<h2 class="col-lg-12 titulo-inicioSesion"> Inicio de sesión</h2>
<p class="col-lg-12 des-inicioSesion">Si ya estás registrado, inicia sesión</p>

<div class="col-lg-12 seccionRegistro">
	
	<input type="email" name="" placeholder="Mail" class="col-lg-10 inputMail">
		<input type="password" name="" placeholder="Contraseña" class="col-lg-10 inputContra">
<a href="" class="col-lg-4  textoContra">¿Olvidaste tu contraseña?</a>
<input type="submit" name="" value="ENTRAR" class="col-lg-5 btnEnviarReg">

</div>

</div>


<div class="col-lg-6 no-gutters">

<h2 class="col-lg-12 tituloRegistro"> Registro</h2>

<form action="php/save.php" method="POST">
<div class="col-lg-12 seccionRegistro">
	
<div class="row"> 
	<input type="name" name="inputNombre" placeholder="Nombres" class="col-lg-5 inputNombre" required="required">

<input type="name" name="inputApellido" placeholder="Apellidos" class="col-lg-5 inputApellido">
</div>

	<div class="row"> 
	<input type="name" name="inputFecha" placeholder="Fecha de nacimiento" class="col-lg-5 inputFecha">

<input type="email" name="inputCorreo" placeholder="Email" class="col-lg-5 inputCorreo" required="required">
</div>	

<div class="row"> 
	<input type="password" name="inputContraDos" placeholder="Contraseña" class="col-lg-5 inputContraDos" required="required">

<input type="password" name="" placeholder="Confirmar contraseña" class="col-lg-5 inputVerContra" required="required">
</div>	

<input type="checkbox" name="gender" value="male" class="col-lg6 checkTerCon" required="required"> <a href="" class="textoTerCon" >Acepto términos y condiciones</a><br>
<input type="checkbox" name="gender" value="male" class="col-lg6 checkPri" required="required"><a href="" class="textoTerCon"> Acepto políticas de privacidad</a><br>

<input type="submit" name="" class="col-lg-5 btnRegistrarme" value="REGISTRARME">

</div>
</form>
</div>


	</div>




</div>

<script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="js/fontawesome-all.js"></script>

<footer>
	
	<div class="container">

		<div class="row justify-content-center">
	<div class="col-lg-3 no-gutters text-center">
		<a href="">Términos y condiciones</a>		
	</div>
	<div class="col-lg-3 no-gutters text-center">

		<a href="">Politicas de privacidad</a>				
	</div>
	</div>
	</div>
</footer>
</body>
</html>