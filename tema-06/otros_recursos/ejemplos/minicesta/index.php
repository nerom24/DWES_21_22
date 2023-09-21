<?php
	require("articulos.php");
	require("articulosCesta.php");
	setlocale(LC_MONETARY, 'es_ES');
	session_start();
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if (isset($_REQUEST['allNoSeleccion'])) {	

			if (!empty($_POST['check'])) {

				$_POST['check']=$_SESSION["articulos"]->allNoSeleccion($_POST['check']);
			}
		}
		
		if (isset($_REQUEST['cesta']) && (isset($_POST['check']))) {
			

			$_SESSION["cesta"]->echarCesta($_POST['check'], $_SESSION["articulos"]);

		}
		if (isset($_REQUEST['vaciar'])) {
			

			$_SESSION["cesta"]=new cesta();

		}
		if (isset($_REQUEST['comprar'])) {
			
			
			header('Location: procesarcompra.php');
			

		}
	}else {
		
		// Inicializo la agenda con 3 usuarios
		$_SESSION["articulos"]=new listaArticulos();
		// Creo 3 objetos tipo artículos
		$art1 = new articulo('001', 'Reloj Pulsera Movi Town', '23.56');
		$art2 = new articulo('002', 'Movil Digital Round Max', '50.01');
		$art3 = new articulo('003', 'Cinta Adesiva Mono Pulsa', '20.03');
		
		// Añado objetos al array
		$_SESSION["articulos"]->insertaArticulo($art1);
		$_SESSION["articulos"]->insertaArticulo($art2);
		$_SESSION["articulos"]->insertaArticulo($art3);

		$_SESSION["cesta"]=new cesta();
	
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
	<title>Mini Cesta Compra POO</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Mini Cesta Compra - POO</H1>
					<H2>Tema 04 Programación Orientada a Objetos PHP</H2>
				</hgroup>
		</header>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<!-- Sección Lista Productos -->
		<section>
		<nav>
			<!-- Especificar Menú Lista Productos -->
			<div class="btn-group" role="group" aria-label="...">
						<input type="submit" class="btn btn-default" value="Seleccionar Todos" name="allSeleccion" /> 
						<input type="submit" class="btn btn-default" value="Borrar Selección" name="allNoSeleccion" />   
			</div>
			<input type="submit" class="btn btn-default pull-right" value= 'Añadir'		name="cesta" >			
		</nav>
		<article>				
			<?php 
				if (!isset($comprar)) {
				$_SESSION["articulos"]->mostrarListaArticulos();
			}
			?>
		</article>
		<section>
		<nav>
			<?php 
				if ($_SESSION["cesta"]->getNumLineasArticulos()>0) {
					// Mostrar Botones Cesta
					echo '<br>';
					echo '<input type="submit" class="btn btn-default" value="Vaciar Carrito" name="vaciar" />';
					echo '<input type="submit" class="btn btn-default pull-right" value= "Comprar"	name="comprar" >';

				}

			 ?>
		
		</nav>
		<article>
			<?php 

				if ($_SESSION["cesta"]->getNumLineasArticulos()>0)
						$_SESSION["cesta"]->mostrarListaCompra();
			 ?>
		</article>
		</section>
		</form>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
