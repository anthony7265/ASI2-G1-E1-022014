<!DOCTYPE html>
<html lang="es">
<head>
	<title>
	Login
	</title>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link type="text/css" href="../css/mapLog.css" rel="stylesheet" media="all" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  <script type="text/javascript" src="../js/mapLog.js"></script>
  <meta charset="UTF-8">
</head>

<body>
  <nav class="navbar navbar-default log" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <img id="logo1" src="../img/ases1.jpg" class="img-responsive" alt="Responsive image">
        <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a>       
      </div>
      
      <br>
      <ul class="nav navbar-nav navbar-right">
        <li class="nohov"><a href="inscripcion_m.tpl.php"> <button class="btn btn-default">Regístrate</button></a></li>
        <li class="nohov"> <a href="" data-toggle="modal" data-target="#myModal"><button class="btn btn-default">Ingresar</button></a></li>
        <img id="logo2" src="../img/logo1.png" class="img-responsive" alt="Responsive image">
      </ul>

      </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
  </nav>
        
  
    <div class="row">
      <div class="col-md-12">
        <div id="map" >
        </div>
        <input type="hidden" name="c_x" class="form-control" id="txt_lat" placeholder="Coordenadas en x">
        <input type="hidden" name="c_y" class="form-control" id="txt_lng" placeholder="Coordenadas en y">    
      </div>
    </div>
            <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
<<<<<<< HEAD
                <form method="POST" name="formLogin"  id="formLogin" class="form-horizontal" role="form" action="">
=======
                <form method="POST" name="formLogin"  id="formLogin" class="form-horizontal" data-toggle="validator" role="form">
>>>>>>> 43ba1f3baf2b9f7320b720939cc6a7b6b059e957
                  <label>
                    Usuario:
                  </label>
                  <input type="text" placeholder="Usuario" name="username_id" id="username_id" class="form-control" required/>
                  <label>
                    Contraseña:
                  </label>
                  <input type="password" placeholder="Contraseña" name="password" id="password" class="form-control" required/>
                  <div class="modal-footer">
<<<<<<< HEAD

                    <button  class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary">Entrar</button>
                    <a href="inscripcion_m.html">Registrate</a>

=======
                    <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button value="Entrar" class="btn btn-primary">Entrar</button>
                    <a href="inscripcion_m.tpl.php">Regístrate</a>
                    <p><p><a href="#">¿Has olvidado tu contraseña?</a>
                  </div>
>>>>>>> 43ba1f3baf2b9f7320b720939cc6a7b6b059e957
                </form>
              </div>  
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
