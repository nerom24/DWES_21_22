<?php 

/* Procedimiento: Actividad 3.2 - Tema 03 - DWES
Curso: 2017/2018
Fecha: 17/10/2017
Autor: Daniel Rubio
*/

//Primera forma declarar array Nombre completo del Módulo, horas semanales y horas totales
	/*$modulos2DAW = array(
		array('DWES', 'Desarrollo web en entorno servidor', 8, 160),
		array('DWEC', 'Desarrollo web en entorno cliente', 6, 120),
		array('DAW', 'Despliegue de aplicaciones web', 6, 120),
		array('DIW', 'Diseño de interfaces web', 6, 120),
		array('EMP', 'Empresas', 4, 80)

	);*/


	//Segunda forma (solo funciona con la segunda forma del codigo php más abajo)
	$modulos2DAW = array(
		'DWES' => array('Desarrollo web en entorno servidor', 8, 160),
		'DWEC' => array('Desarrollo web en entorno cliente', 6, 120),
		'DAW' => array('Despliegue de aplicaciones web', 6, 120),
		'DIW' => array('Diseño de interfaces web', 6, 120),
		'EMP' => array('Empresas', 4, 80)

	);

	
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Tema 03 - Práctica 2</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<!-- Títulos y subtítuos -->
					<h1>Tema 03 - DWES</h1>
					<br>
					<h3>Práctica 2 - Ejercicio 4</h3>
					<br>
					<h3>Inicio</h3>
					<br>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>

			<form method="POST" role="form">
				<legend>Añadir asignatura</legend>
			
				<div class="form-group">
					<label for="">Abreviatura</label>
					<input type="text" class="form-control" name="dato1" id="inputDato1" placeholder="" required="required" autofocus="">
				</div>

				<div class="form-group">
					<label for="">Nombre Completo</label>
					<input type="text" class="form-control" name="dato2" id="inputDato2" placeholder="" required="required">
				</div>

				<div class="form-group">
					<label for="">Horas Semanales</label>
					<input type="text" class="form-control" name="dato3" id="inputDato3" placeholder="" required="required">
				</div>

				<div class="form-group">
					<label for="">Horas Totales</label>
					<input type="text" class="form-control" name="dato4" id="inputDato4" placeholder="" required="required">
				</div>
			
				
			
				<button type="submit" class="btn btn-primary" formaction="anadir.php">Añadir</button>
				
				<button type="reset" class="btn btn-secondary">Borrar</button>
			</form>
			
			</article>
		</section>
		<footer>
			<hr>
			<p>&copy; DWES - Daniel Rubio - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>