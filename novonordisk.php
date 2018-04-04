

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
		 	
			<div class="col-lg-5 col-md-6">
			<!-- abro col de la imagen logo-->
			<div class="col-lg-6 ">
				
			<a href="index.html"><img src="img/logoAcademia.png" class="img-fluid p-sm-4"></a>
			
			
			</div>
			<!-- cierro col de la imagen logo-->
			</div>
			<!-- cierro col -->


			<!-- Abro col -->	
		 	
			<div class="col-lg-7 ">

		 		<div id="main-menu">
		            <ul class="nav justify-content-around ">
		              <li class="nav-item">
		                <a class="nav-link d-none d-md-block" href="index.html">Inicio</a>
		                
		              </li>
		        
		              <li class="nav-item">
		                <a class="nav-link d-none d-md-block" href="">Cardio blog</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link d-none d-md-block" href="contacto.html">Contacto</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link menuActivo d-none d-md-block" href="novonordisk.php">Login / Registro</a>
		              </li>

		              <li class="">
		              		<ul class="nav nav-tabs">
							  
							  <li class="nav-item  dropdown">
							    <a class="" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"  >

								<i class="fas fa-bars fa-2x text-secondary"></i>

							    </a>
							    <div class="dropdown-menu ">
							    	<a class="dropdown-item bg-primary text-light d-block d-sm-none" href="index.html">Inicio</a>
							      <a class="dropdown-item bg-primary text-light d-block d-sm-none" href="">Cardio blog</a>
							      <a class="dropdown-item bg-primary text-light d-block d-sm-none" href="contacto.html">Contacto</a>
							      <a class="dropdown-item bg-primary text-light d-block d-sm-none" href="novonordisk.php">Login / Registro</a>
							       <div class="dropdown-divider"></div>	
							      <a class="dropdown-item" href="diabetes.html">Diabetes y enfermedad cardiovascular</a>
							      <a class="dropdown-item" href="lipidos.html">Lipidos</a>
							      <a class="dropdown-item" href="coronaria.html">Enfermedad coronaria</a>
							      <a class="dropdown-item" href="insuficiencia.html">Insuficiencia cardíaca</a>
							      <a class="dropdown-item" href="anticuagulacion.html">Anticoagulación</a>
							      <a class="dropdown-item" href="preventiva.html">Cardiología preventiva</a>
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

<div class="col-lg-6 col-md-12 col-sm-12 no-gutters">

<h2 class="col-lg-12 col-md-12 sol-sm-12  titulo-inicioSesion"> Inicio de sesión</h2>
<p class="col-lg-12 col-md-12 col-sm-12  des-inicioSesion">Si ya estás registrado, inicia sesión</p>

<div class="col-lg-12 seccionRegistro">
	
	<input type="email" name="" placeholder="Mail" class="col-lg-10 col-md-10 col-sm-10 col-10 inputMail">
		<input type="password" name="" placeholder="Contraseña" class="col-lg-10 col-md-10 col-10 inputContra">
<a href="" class="col-lg-4 col-md-4 col-sm-4 col-4 textoContra">¿Olvidaste tu contraseña?</a>
<input type="submit" name="" value="ENTRAR" class="col-lg-5 col-md-5 col-sm-5 col-5 btnEnviarReg">

</div>

</div>


<div class="col-lg-6 col-md-12 col-sm-12 no-gutters">

<h2 class="col-lg-12 tituloRegistro"> Registro</h2>

<form action="php/save.php" method="POST">

<div class="col-lg-12 col-md-12 col-sm-12 seccionRegistro">

		<div class="row"> 
			<div class="col-lg-4 col-md-4 col-sm-4 logo-Novo">
<img src="img/logoNovo.png" class="col-lg-12 col-md-12 col-sm-12 img-responsive" >
</div>
	<p class="col-lg-8 col-md-8 col-sm-8 texto-Novo">Novo Nordisk Colombia tiene el gusto de contribuir a la educación médica de los profesionales de la salud en
Colombia otorgando una membresía de acceso ilimitado a todo el contenido académico de Academia Cardiovascular durante 12 meses.
</p>
</div>
<div class="row"> 
	<input type="name" name="inputNombre" placeholder="Nombres" class="col-lg-5 col-md-5 col-sm-5 col-10  inputNombre" required="required">

<input type="name" name="inputApellido" placeholder="Apellidos" class="col-lg-5 col-md-5 col-sm-5 col-10 inputApellido" required="required">
</div>
	<div class="row"> 
	<input type="mail" name="inputCorreo" placeholder="Correo" class="col-lg-5 col-md-5 col-sm-5 col-10 inputCorreo" required="required">

<input type="text" name="inputCodigo" placeholder="Código de acceso" class="col-lg-5 col-md-5 col-sm-5 col-10 inputCodigo" required="required">
</div>	
	<div class="row"> 
	<input type="text" name="inputCedula" placeholder="Cédula de ciudadanía" class="col-lg-5 col-md-5 col-sm-5 col-10 inputCedula" required="required">

<input type="password" name="inputContrasena" placeholder="Contraseña" class="col-lg-5 col-md-5 col-sm-5 col-10 inputContraDos" required="required">
</div>	

<div class="row"> 
	

<input type="password" name="" placeholder="Confirmar contraseña" class="col-lg-5 col-md-5 col-sm-5 col-10 inputVerContra" required="required">
</div>	

<input type="checkbox" name="gender" value="male" class="col-lg6 checkTerCon" required="required"> <a href="" class="textoTerCon" data-toggle="modal" data-target="#terminos" >Acepto términos y condiciones</a><br>
<input type="checkbox" name="gender" value="male" class="col-lg6 checkPri" required="required"><a href="" class="textoTerCon" data-toggle="modal" data-target="#politicas"> Acepto políticas de privacidad</a><br>

<input type="submit" name="" class="col-lg-5 col-md-5 col-sm-5 col-5 btnRegistrarme" value="REGISTRARME">
<div class="row"> 
	<p class="col-lg-11 col-md-11 col-sm-11 texto-itaAca">Academia Cardiovascular es un producto académico independiente de Estrategias Médicos de Impacto SAS con el aval académico de la Sociedad Latinoamericana de Educación Médica. El contenido es completamente ajeno a Novo Nordisk y revisado en su totalidad por el equipo de coordinación académica de Academia Cardiovascular.

</p>
</div>
</div>
</form>
</div>


	</div>




</div>

<script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="js/fontawesome-all.js"></script>

<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="terminos" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="terminos">Términos y condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <div class="container-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
      </div>
      </div>
      
    </div>
  </div>
</div>



<div class="modal fade" id="politicas" tabindex="-1" role="dialog" aria-labelledby="politicas" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="politicas">Políticas de privacidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <div class="container-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
      </div>
      </div>
      
    </div>
  </div>
</div>


<footer>
	
	<div class="container">

		<div class="row justify-content-center">
	<div class="col-lg-3 no-gutters text-center">
		<a class="btn text-light" data-toggle="modal" data-target="#terminos">Términos y condiciones</a>		
	</div>
	<div class="col-lg-3 no-gutters text-center">

		<a class="btn text-light" data-toggle="modal" data-target="#politicas">Políticas de privacidad</a>				
	</div>
	</div>
	</div>
</footer>
</body>
</html>