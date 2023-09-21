
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Actividad 3.1 - Ejercicio 1 - Mostrar Tabla</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<!-- Títulos y subtítuos -->
					<h1>Tema 03 - DWES</h1>
					<h3>Practica 01 - Ejercicio - 01 - Mostrar Tabla [1 - 100]</h3>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
				<tbody>
						
				<?php
				/*
				Muestra en una tabla los valores del 1 al 100
				*/ 
					$n=1;
					for ($n1=1; $n1<=10; $n1++)	{
						echo "<tr>";
						for ($n2=1; $n2<=10; $n2++) {
							echo "<td>", $n, "</td>";
							$n=$n+1;
						}
						echo "</tr>";
					}
				?>
				</tbody>
				</table>
			</div>

			</article>
		</section>
		<footer>
			<hr>
			<p>&copy; DEWS - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
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