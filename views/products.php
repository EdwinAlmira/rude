<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/products.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
	
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">s
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
        <br> <br>

<!---Navegacion entre categorias-->

<section><br>
	<div class="container-fluid" id="principalP">
		<div class="row-fluid">
			<div class="col-sm-2 col-md-2  postz" >
				<ul class="nav nav-pills nav-stacked" id="menuVertical">
					<li class="active item " id="mobos"><a href="#" class="categoria">Todos</a></li>
					<li class="item" id="pros"> <a href="#">Oficina</a></li>
					<li class="item"> <a href="#">antivirus</a></li>
					<li class="item"> <a href="#">Productividad</a></li>
					<li class="item"> <a href="#">Diseño Grafico</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<input type="text" class="form-control" placeholder="Buscar producto...">
				</form>
			</div>
			
				<!--Cuadricula con productos-->
		
			<div class="col-sm-10 col-md-10 cuadricula">
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3  text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive"  src="../img/licencias2.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Office 360</h3>
					        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/eset.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Eset Nod 32</h3>
					        <p class="text-center">Protege tus equipos con el respaldo de Eset Nod 32.</p>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/autocad.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">AutoCad</h3>
					        <p class="text-center">Diseña y convierte tus ideas en proyectos fisicos.</p>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
						<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/potho_converted.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Photoshop</h3>
					        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/indesing.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">InDesing</h3>
					        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/oracle_converted.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Oracle Database</h3>
						        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/anti_converted.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Kaspersky</h3>
						        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/vm.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">VM Workstation</h3>
						        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
			</div>
			</div>
		</div>
	</div>
	</section>
	<br>

	<!--footer-->
<footer>
      <div class="container-fluid">
       <div class="col-xs-12 col-md-4">¿Tienes preguntas? Llama al <a class="afoot" href=""> +1 (408) 600-1720 (USA)</a></div>
       <div class="col-xs-6 col-md-4"><a class="afoot" href="">Preguntas Frecuentes</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Centro de ayuda</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Cuenta</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Prensa</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Relaciones con inversionistas</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Comprar/Canjear regalo</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="">Formas de ver</a></div>
       <div class="col-xs-6 col-md-4 hidden-xs hidden-sm"><a class="afoot" href="" data-toggle="modal" data-target="#terminos">Terminos de uso</a></div>
        <div class="navbar-text pull-left col-xs-12">
          <p>© 2016 Rudeware.</p>
        </div>
      </div>
    </footer>
<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/products.js"></script>
</body>
</html>