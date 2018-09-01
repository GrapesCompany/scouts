<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Administración</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/estilosadmin.css" rel="stylesheet">


    <!-- Custom styles -->
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="vendor/jquery/jquery.min.js"></script>

</head>
 
<body class="main min-height">

<div class="login-screen"></div>
    <div class="login-center">
        <div class="container">
        	<div class="row" style="margin-top: 100px;">
                <div class="col-xs-4 col-md-offset-8">
                    <div class="login" id="card">
                    	<div class="front signin_form"> 
                        <p class="tamtitulo">ADMINISTRACIÓN SAN FELIPE NERI</p>
                          <form class="login-form" method='post' action='./login/verificar.php/?tipoP=administrador'>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="text" class="form-control" name="username" placeholder="Usuario:">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" class="form-control" name="password" placeholder="Contraseña:">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                            <br>

                            <div class="radio">
                            &nbsp;&nbsp;&nbsp;  
                <label class="checkbox-inline fadeIn third"><input type="radio" name="optradio" id="optradio" value="jefegrupo" checked>Administrador</label></a> 
                &nbsp;&nbsp;&nbsp;
                <label class="checkbox-inline fadeIn third"><input type="radio" name="optradio" id="optradio" value="dirigente">Dirigente</label></a>
                
                </div>
                <br>
                                                   
                               <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Entrar">
                                  <p>
                                  <?php
                                    if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Datos no válidos
                                    </div>
                                    <?php } 
                                    if(isset($_GET['salir'])){?>
                                    <div class="alert alert-info" role="alert">
                                        Gracias por usar nuestros servicios
                                    </div>
                                    <?php }
                                    if(isset($_GET['denegado'])){?>
                                        <div class="alert alert-danger" role="alert">
                                            Acceso denegado
                    </div> <?php } ?>
                                  </p>
                               </div>                             
                               <div class="col-sm-12 mx-auto text-center" style="margin: auto">
                                    <a href="https://www.facebook.com/">
                                      <i class="fa fa-facebook-square fa-2x evhover"></i>
                                    </a>
                                    &nbsp;
                                    <a href="https://www.instagram.com/?hl=es-la">
                                      <i class="fa fa-instagram fa-2x evhover"></i>           
                                    </a>
                                </div>                    
                        
                        </form>
                        </div>
                        <div class="back signup_form"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>
    <script src="vendor/bootstrap/js/scripts.js"></script>

    </body>

</html>