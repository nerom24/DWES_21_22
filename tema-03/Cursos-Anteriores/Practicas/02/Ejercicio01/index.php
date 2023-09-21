<?php 

/* Procedimiento: Actividad 3.2 - Tema 03 - DWES
Curso: 2017/2018
Fecha: 17/10/2017
Autor: Daniel Rubio
*/

//Primera forma declarar array
	$modulos2DAW = array(
		'DWES',
		'DWEC',
		'DAW',
		'DIW',
		'EMP'

	);


	//Segunda forma declarar array
	$modulos2DAW2 = array(
		0 => 'DWES',
		1 => 'DWEC',
		2 => 'DAW',
		3 => 'DIW',
		4 => 'EMP'

	);


	//Tercera forma declarar array
	$modulos2DAW3 = [
		'DWES',
		'DWEC',
		'DAW',
		'DIW',
		'EMP'

	];


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
					<h3>Práctica 2 - Ejercicio 1</h3>
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
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($modulos2DAW as $modulo) {
								echo"<tr><td>";
								echo $modulo;
								echo "</td></tr>";
							}
							

							/*for ($i=0; $i <= 4 ; $i++) { 
								echo"<tr><td>";
								echo $modulos2DAW[$i];
								echo "</td></tr>";
							}*/
				
				
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