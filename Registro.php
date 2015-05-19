<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Clase de Programación Web</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <script src="js/jquery.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Prog. Web</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alumnos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="registro.php">Registro</a></li>
            <li><a href="#">Mostrar Alumnos</a></li>
            <li><a href="#">Editar Alumnos</a></li>
            <li class="divider"></li>
            <li><a href="#">Eliminar Alumno </a></li>
            <li class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Iniciar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Alumnos</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" name="formRegistro" method="POST" action="guarda.php">
  <fieldset>
    <div class="form-group">
      <label for="inputNombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputNombre" placeholder="Nombre" type="text" name="nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Edad:</label>
      <div class="col-lg-2">
        <input class="form-control" id="inputEdad" placeholder="Edad" type="text" name="edad">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Sexo:</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="sexo" id="r1" value="Masculino" checked="" type="radio">
            Masculino
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="sexo" id="r2" value="Femenino" type="radio">
            Femenino
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Carrera</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="carrera">
          <option>Ing. Sistemas Computacionales</option>
          <option>Ing. Industrial</option>
          <option>Ing. Electrónica</option>
          <option>Ing. Bioquímica</option>
          <option>Ing. Mecánica</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>
</div>
    </div>
    <div class="col-xs-0 col-lg-2"></div>
  </div>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>

