<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	 
	   <div class="container-fluid">    
	   	<div class="row">
	   		<h2 id="title" class="text-center">Iniciar Sesion</h2>
	   	</div>
        <div id="loginbox" class=" col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel-body" >
                  <div id="login-alert" class="alert alert-danger col-sm-12"></div>
                      <form id="loginform" class="form-horizontal" role="form">
                      <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="correo electronico">

               </div>
                                
              <div  class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
              </div>      
                <div class="input-group">
                    <div class="checkbox">
                        <label>
                           <input id="login-remember" type="checkbox" name="remember" value="1"> Recordar Contraseña
                           </label>
                    </div>
                </div>
              <div  class="form-group">
                   <div class="col-sm-12 controls">
                      <a id="btn-login" href="#" class="btn btn-success center-block">Iniciar Sesion</a>
                   </div>
              </div>


	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>