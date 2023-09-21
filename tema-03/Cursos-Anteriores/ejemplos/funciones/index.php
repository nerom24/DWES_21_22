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
					<h1>Funciones</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
					//Define la función con parametros por valor
					function suma1 ($a, $b)
					{
					  $c=$a+$b;
					  $a=1;
					  $b=2;
					  return $c;
					}

					//Define la función con parametros por referencia
					function suma2 (&$a, &$b)
					{
					  $c=$a+$b;
					  $a=1;
					  $b=2;
					  return $c;
					}

					list($aa, $bb)=array(3,2);

					//Llama la función 1 por referencia (no puede ser de otra forma)
					print $aa;
					print $bb;
					print $suma=suma1($aa,$bb);
					print $aa;
					print $bb;

					echo "<br>";


					//Llama la función 2 por referencia
					print $aa;
					print $bb;
					print $suma=suma2($aa,$bb);
					print $aa;
					print $bb;

				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>