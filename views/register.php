<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/nav.css">
</head>
<body>
	
	  <!--Barra de navegación-->

  <nav class="navbar navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--Marca del nav -->
              <a href="#" class="navbar-brand"><img src="../img/rudeware.svg" class="img-responsive loguito" alt="Responsive image"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Productos</a></li>
                <!--Dropdown del nav -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quienes Somos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Visión y Misióm</a></li>
                    <li><a href="#">Nuestros Proveedores</a></li>
                    <li><a href="#">Soporte</a></li>
                  </ul>
                </li>
                <li><a href="#">Iniciar Sesión</a></li>
                <li><a href="#">Registrate</a></li>
              </ul>
            </div>
          </div>
        </nav>

	<!-- Sección donde se encuentra el contenido de la pagina -->

	<br><br><br><br>
	<section>
		<div class="container-fluid">
			<div class="row">
			<br>
			<div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0">
					<div class="thumbnail card">
						<img src="../img/workers.jpg" alt="img-rude">
						<div class="caption">
							<h3 class="text-center">Tu cuenta</h3>
							<p class="text-center">Tu sitio de administracion del software de tu empresa</p>
						</div>
					</div>
				</div>
				<div id="loginbox" class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0">
					<h2 id="title" class="text-center">Registrarme</h2>
					<form id="loginform" role="form">

						<form role="form">
							<div class="form-group">
								<label for="name">Nombres</label>
								<input type="text" class="form-control" id="name" placeholder="Ingrese sus nombres">
							</div>
							<div class="form-group">
								<label for="lname">Apellidos</label>
								<input type="text" class="form-control" id="lname" placeholder="Ingrese sus apellidos">
							</div>
							<div class="form-group">
								<label for="email">Correo Electronico</label>
								<input type="email" class="form-control" id="email" placeholder="correo electronico">
							</div>
							<div class="form-group">
								<label for="pwd">Contraseña</label>
								<input type="password" class="form-control" id="pwd" placeholder="Escriba una contraseña">
							</div>
							<div class="checkbox">
								<label><input type="checkbox">¡Sé el primero en conocer las mejores ofertas!</label>
							</div>
							<div  class="form-group">
								<div class="col-sm-12 controls">
									<button class="btn btn-hola center-block">Registrame</button>
								</div>
								<br>
								<br>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<br>

		<!--Footer -->
		<footer>
			<div class="container-fluid">
				<div class="col-xs-12 col-md-4">¿Tienes preguntas? Llama al <a class="afoot" href=""> +1 (408) 600-1720 (USA)</a></div>
				<div class="col-xs-6 col-md-4"><a class="afoot" href="">Preguntas Frecuentes</a></div>
				<div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Centro de ayuda</a></div>
				<div class="col-xs-6 col-md-4  hidden-xs hidden-sm"><a class="afoot" href="">Cuenta</a></div>
				<div class="col-xs-6 col-md-4  hidden-xs hidden-sm"><a class="afoot" href="">Prensa</a></div>
				<div class="col-xs-6 col-md-4  hidden-xs hidden-sm"><a class="afoot" href="">Relaciones con inversionistas</a></div>
				<div class="col-xs-6 col-md-4  hidden-xs hidden-sm"><a class="afoot" href="">Comprar/Canjear regalo</a></div>
				<div class="col-xs-6 col-md-4  hidden-xs hidden-sm"><a class="afoot" href="">Formas de ver</a></div>
				<div class="col-xs-6 col-md-4  hidden-xs hidden-sm"><a class="afoot" href="">Terminos de uso</a></div>
				<div class="navbar-text pull-left col-xs-12">
					<p>© 2016 Rudeware.</p>
				</div>
			</div>
		</footer>
}
<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
	</body>
	</html>