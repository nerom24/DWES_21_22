<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Funciones string</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Funciones Strings</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
					function iniAgenda() {
						$agen = array(
						"Manolo"=>678985678,
				        "Benito"=>689345687,
				        "Andres"=>675324312,
				        "Francisco"=>674321543,
				        "José"=>698099089); 
				        return $agen;
				    }

				     $agenda=iniAgenda();

				     echo "<h3>Agenda</h3>";
				     print_r($agenda);

				     echo "<h3>implode</h3>";
				     $valores=implode(":", $agenda);
				     echo "valores=".$valores;
				     $claves=implode(":", array_keys($agenda));
				     echo "<br>";
				     echo "Claves=".$claves;

				     echo "<h3>explode</h3>";
				     $arrayValores=explode(":",$valores);
				     print_r ($arrayValores);
				     echo "<br>";
				     $arrayClaves=explode(":", $claves);
				     print_r ($arrayClaves);

				     echo "<h3>Agenda</h3>";
				     echo "<br>";
				     $agenda=array_combine($arrayClaves, $arrayValores);
				     print_r($agenda);


				    
				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>