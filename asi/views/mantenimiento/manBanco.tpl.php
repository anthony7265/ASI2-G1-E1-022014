<?php 
require_once '/var/www/html/asi2/ASI2-G1-E1-022014/asi/model/data/dataBase.php';
require_once '/var/www/html/asi2/ASI2-G1-E1-022014/asi/model/clases/cBancSql.php';

$banco= new Banco();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de Miembro</title>

	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
  <body>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img id="logo1" src="../../img/ases1.jpg" class="img-responsive" alt="Responsive image">
        <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a> 
        
      </div>
        
        <br>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Inscripciones</a></li>
          <li><a href="#">Renovacion</a></li>
          <li><a href="#">Grupos Scout</a></li>
          <li><a href="#">Miembros Scout</a></li>
          <img id="logo2" src="../../img/logo1.png" class="img-responsive" alt="Responsive image">

        </ul>

      </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
  	</nav>
    <div class="container">
      <div class="row">
          <div class="col-md-4">
            <h1>Listado de Bancos</h1>
            <select class="form-control">
              <option>
                Nuevo Banco

              </option>
              <option>
                Banco Davivienda
              </option>
            </select><br>
          <form name="banco" action="../../model/clases/acBanco.php" method="POST">
              <label>
                Nombre:
              </label> 
              <input type="text" class="form-control" name="nomBanco">
              <label>
                Numero de Cuenta:
              </label>
              <input type="text" class="form-control" name="numCuenta">
              <br>
              <button class="btn btn-success ">Cancelar</button>
              <button class="btn btn-success" >Guardar</button>
          </form>  
          </div>
          <div class="col-md-4">
            <table class="table table-hover">
              <thead>
            <tr>
              <th>Nombre de Banco</th>
              <th>Numero De Cuenta</th>
            </tr>
          </thead>
          <tbody>
              <tr>
              
              <td>
                Banco Davivienda
              </td>
              <td>
                00909878-8
              </td>
              
              
            </tr>            

          </tbody>
        </table>
            
          </div>        
      </div>
    </div>
</body> 
<html>