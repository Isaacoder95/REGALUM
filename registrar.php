

<?php 
$s ='localhost';
$u = 'root';
$p = '';
$b= 'regalum';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sistema</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="">REGALUM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
      

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alumnos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="consultar.php">Consultar Alumnos</a>
              
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">SISTEMA</h1>
         <?php 
		/*PARAMETRO MYSQLI_CONNECT SIN COMILLAS O APOSTROFES UNICAMENTE VARIABLES */
		$conexion = mysqli_connect($s,$u,$p,$b) or die('<p>'.'Error  en la conexion'.'</p>');

			$m = $_POST['MAT'];
			$ap = $_POST['APA'];
			$am = $_POST['AMA'];
			$n = $_POST['NOM'];
			$e = $_POST['EMA'];
			$t = $_POST['TEL'];


		$insertar = "INSERT into alumno values('$m','$ap','$am','$n','$e','$t')";
		$resultado = mysqli_query($conexion,$insertar)or die('<p>'.'Error en la inserción, DATOS DUPLICADOS O NO VALIDOS'.'</p>'.'<p>'.'<a class="btn btn-primary btn-lg" href="index.html" role="button">Regresar &raquo;'.'</a>'.'</p>');

		mysqli_close($conexion);
		echo '<p>'.'Datos Correctamente Insertados'.'</p>';

		 ?>

         
          <p><a class="btn btn-primary btn-lg" href="index.html" role="button">Regresar &raquo;</a></p>
        </div>
      </div>


    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
