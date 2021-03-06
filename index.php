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
    <div class="jumbotron">
  <h1>Sistema de Gestión de alumnos</h1>
  <p>Esta es una plantilla para realizar prácticas de Progamación Web, utilizando PHP y MySql</p>
  <p><a class="btn btn-primary btn-lg">Más</a></p>
</div>
  </div>
</div>

	<script src="js/bootstrap.js"></script>
</body>
</html>