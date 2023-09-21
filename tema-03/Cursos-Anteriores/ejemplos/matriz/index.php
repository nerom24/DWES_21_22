<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Tabla con números del 1 al 100</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Definición Array</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
				$modulos = array(
				'DWES'=>array("Desarrollo Web Entorno Servidor", 8, 168), 
				'DWEC'=>array("Desarrollo Web Entorno Cliente", 6, 126),
				'DAW'=>array("Despliegue Aplicaciones Web", 3, 63),
				'DIW'=>array("Diseño de Interface Web", 6, 126),
				'EMP'=>array("Empresa e Iniciativa Emprendedora", 4, 64),
				'HLC'=>array("Horas de Libre Configuración", 3, 63),
				'PROY'=>array("Proyecto Desarrollo Aplicaciones Web","" , 40),
				'FCT'=>array("Formación Centro de Trabajo","" ,370));
				echo '<table class="table table-hover table-striped">';
				echo "<tr><th>Módulo</th>";
				echo "<th>Nombre Completo</th>";
				echo "<th>Horas Semanales</th>";
				echo "<th>Horas Totales</th></tr>";
				foreach ($modulos as $ind =>$valores) {
					echo "<tr><td>";
					echo $ind;
					echo "</td>";
					foreach ($valores as $datos) {
						echo "<td>";
						echo $datos;
						echo "</td>";
					}
					echo "</tr>";
				}
				echo '</table>';
				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>