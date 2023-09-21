<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	if (isset($_REQUEST['reiniciar'])) {
  	reiniciarContador();
  	$contador = 1;

    }
  else { 

  if (isset($_COOKIE['contador']))
  
  { 
    // Caduca en un año 
    $mensaje1 = 'Número de visitas: ' . $_COOKIE['contador'];
    $mensaje2 = 'Fecha última visita:'. $_COOKIE['fechaUltVisit'];

    $contador =  $_COOKIE['contador'] + 1;


  } 
  else 
  { 
    // Caduca en un año 
    $mensaje = 'Bienvenido a nuestra página web';
    $contador = 1; 
  }
  
  $fecha = date("d-m-Y H:i:s");
  setcookie('contador', $contador, time() + 365 * 24 * 60 * 60);
  setcookie('fechaUltVisit', $fecha, time() + 365 * 24 * 60 * 60);

 }

  function reiniciarContador() {
  	$_COOKIE['contador']=0;
  	setcookie('contador', '', time() -3600);
  	setcookie('fechaUltVisit', '', time() -3600);
  }


?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Cookies</title>
</head>
<body>
	<div class="container">
		<header class="jumbotron text-center">
            <h1>Contador Visitas - Cookies</h1>
            <h2>Tema 5. Control de Sesiones</h2>
        </header>
		<nav>
		</nav>
		<section>
			<article>
			<?php echo $mensaje1; ?>
			<br>
			<?php echo $mensaje2; ?>
			<br>
			<hr>
			</article>
			<form method="POST">
				<button type="submit" class="btn btn-primary" name="reiniciar">Reiniciar</button>
			</form>
		</section>
		<footer>
			<br>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
</body>
</html>
