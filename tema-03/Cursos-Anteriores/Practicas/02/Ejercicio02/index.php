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


	//Segunda forma (solo funciona con la segunda forma del código php más abajo)
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
					<h3>Práctica 2 - Ejercicio 2</h3>
					<br>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Módulos 2 DAW - 17/18</th>
							<th>Nombre Completo</th>
							<th>Horas Semanales</th>
							<th>Horas Totales</th>


						</tr>
					</thead>
					<tbody>
						<?php
							
							//Primera forma foreach
							/*foreach($modulos2DAW as $fila) {
								echo('<tr>');
									foreach($fila as $celda) {
										echo('<td>' . $celda . '</td>');
									}
								echo('</tr>');
								}*/

							//Segunda forma foreach
							foreach($modulos2DAW as $fila => $value) {
								echo('<tr>');
								echo('<td>' . $fila . '</td>');
									foreach($value as $celda) {
										echo('<td>' . $celda . '</td>');
									}
								echo('</tr>');
								}

							//Primera forma for
							/*
							for($i=0;$i<count($modulos2DAW);$i++) {
							  	echo('<tr>');
							  	echo('<td>' . $modulos2DAW[$i][0] . '</td>');
							  	echo('<td>' . $modulos2DAW[$i][1] . '</td>');
							  	echo('<td>' . $modulos2DAW[$i][2] . '</td>');
							  	echo('<td>' . $modulos2DAW[$i][3] . '</td>');
							  	echo('</tr>');
							}
							*/
				
			 			?>
						
					</tbody>
				</table>

			<?php
				
				
			 ?>
			
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