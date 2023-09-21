<?php 
	/* Procedimiento PHP
	Descripción: 
	Autor: Juan Carlos Moreno
	Fecha: 04/10/2017
	*/

	// Calculo de resultados
	define ("G",9.8);
	$velInicial = $_POST["velInicial"];
	$angulo = deg2rad($_POST["angulo"]);
	// Cálculos movimientos proyectil
	$V0x = $velInicial  * cos($angulo);
	$V0y =  $velInicial  * sin($angulo);
	$t = 2 * ($V0y / G);
	$yMax =  (pow($velInicial,2) * pow(sin($angulo),2)) / (2 * G);
	$xMax = pow($velInicial,2) * sin(2 * $angulo) / G;
	
	// Formateo de resultados
	$velInicial = number_format($velInicial, 2,",",".");
	$angulo = number_format($angulo, 2,",",".");
	$V0x = number_format($V0x, 2,",",".");
	$V0y = number_format($V0y, 2,",",".");
	$t = number_format($t, 4,",",".");
	$yMax = number_format($yMax, 2,",",".");
	$xMax = number_format($xMax, 2,",",".");





?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Practica 06 - Movimiento de Proyectiles</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<!-- Títulos y subtítuos -->
					<h1>Tema 02 - DWES</h1>
					<h3>Practica 06 - Movimiento de Proyectiles</h3>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<!-- Especificar tabla  bs3-table -->

			<table class="table table-striped table-hover">
				<tbody>
			<tr>
				<th>Valores Iniciales:</th>
				<td></td>
			</tr>
			<tr>
				<td>Velocidad Inicial:</td>
				<td><?php echo $velInicial; ?> m/s</td>
			</tr>
			<tr>
				<td>Ángulo Inclinación:</td>
				<td><?php echo $_POST["angulo"] ?> º</td>
			</tr>
			<tr>
				<th>Resultados:</th>
				<td></td>
			</tr>
			<tr>
				<td>Angulo Radianes:</td>
				<td><?php echo $angulo; ?> Radianes</td>
			</tr>
			<tr>
				<td>Velocidad Inicial X:</td>
				<td><?php echo $V0x; ?> m/s</td>
			</tr>
			<tr>
				<td>Velocidad Inicial Y:</td>
				<td><?php echo $V0y; ?> m/s</td>
			</tr>
			<tr>
				<td>Alcance Máximo del Proyectil:</td>
				<td><?php echo $xMax; ?> m</td>
			</tr>
			<tr>
				<td>Tiempo de Vuelo del proyectil:</td>
				<td><?php echo $t; ?> s</td>
			</tr>
			<tr>
				<td>Altura Máxima del Proyectil:</td>
				<td><?php echo $yMax; ?> m</td>
			</tr>
				</tbody>
			</table>
			<a class="btn btn-primary" href="index.php" role="button">Volver</a>

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



