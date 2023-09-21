<?php 
	/**
	 * Fichero: plantilla.php
	 * Parámetros: ninguno
	 * Descripción: Colección de funciones que permiten generar el código HTML
	 * de la plantilla
	 * Autor: Jc
	 * Fecha: 16/10/2018
	 */

	# Función que genera código HTML del HEAD de la plantilla

	function head () {

	?>	

	<head>
	
		<title>Examen DWES - de ...</title>	
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    	<!-- Google Materail Icons -->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">
	
	</head>
	
	<?php 

	}

	# Función que genera código HTML de la cabecera de la página
	
	function cabecera () {
	
	?>
		<header>
			<hgroup>
				<h1>DWES 18/19 - Examen</h1>
				<h2>Tema 03 - Práctico</h2>
			</hgroup>
		</header>
	<?php 
	
	}

	# Función que genera código HTML del menú principal del proyecto

	function menuPrincipal () {

	?>
	
	<section>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="nuevo.php">Nuevo</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Ordenar
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="ordenar.php?criterio=Fabricante">Fabricante</a>
				      <a class="dropdown-item" href="ordenar.php?criterio=Modelo">Modelo</a>
				      <a class="dropdown-item" href="ordenar.php?criterio=Combustible">Combustible</a>
				      <a class="dropdown-item" href="ordenar.php?criterio=Motor">Motor</a>
				       <a class="dropdown-item" href="ordenar.php?criterio=Precio">Precio</a>
				    </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#">Disabled</a>
			      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0" method="GET">
			    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="expBusqueda">
			    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" formaction="buscar.php">Buscar</button>
			</form>
	  	</div>
	</nav>
	</section>

	<?php 

	}

	# Función que muestra la cabecera y elementos de la matriz

	function mostrarTabla($tabla) {

	?>

	<section>
				
		<table class="table">
			<legend>Tabla Vehículos</legend>

			<?php if (!empty($tabla)): ?>

			<thead>
				
				<tr>
					<?php foreach ($tabla[0] as $key => $registros): ?>
						<th>
							<?php echo $key ?> 
						</th>
					<?php endforeach; ?>
					<!-- Añadir columna Acciones -->
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($tabla as $key =>$registro): ?>
					<tr>
					<?php foreach ($registro as $campo): ?>
						<td>
							<?php echo $campo ?>
						</td>
					<?php endforeach; ?>
					<!-- Añadir Acciones disponibles -->
					<td>
						<a href="eliminar.php?indice=<?=$key; ?>" title="Eliminar"><i class="material-icons">clear</i></a>
						<a href="formActualizar.php?indice=<?=$key; ?>" title="Actualizar"><i class="material-icons">edit</i></a>
						<a href="formMostrar.php?indice=<?=$key; ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
					</td>
					</tr>
				<?php endforeach; ?>
				</tr>
			</tbody>

			<?php endif; ?>

		</table>

	</section>

	<?php 

	}

	# Función que genera código HTML para el footer de la página

	function pie () {

	?>

	<hr>
	<footer>&copy; DWES  - tu nombre - 2ºDAW - Curso 18/19</footer>

	<?php 
	
	}

	# Función que genera código HTML para los script

	function scriptVarios () {

	?>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

	<?php 

	}

	# Función que genera el index o la página principal completa

	function index ($tabla) {

	?>

	<!DOCTYPE html>
	<html>
	
	<?php head(); ?>
	
	<body>
		<div class="container">
			
			<!-- Cabecera -->

			<?php cabecera(); ?>

			<!-- Menú Principal -->
			
			<?php menuPrincipal(); ?>
			

			<!-- Mostrar tabla -->
			
			<?php mostrarTabla($tabla); ?>
			
			<!-- Mostrar Pie de página -->

			<?php echo "Registros: ". cuenta($tabla); ?>

			<!-- Mostrar Pie de página -->
			
			<?php pie(); ?>
		
		</div>

		<?php scriptVarios(); ?>
		
	</body>
	</html>

	<?php 
	}

	# Formulario para añadir un vehiculo

	function formNuevoVehiculo($tipos) {

	?>

	<section>
			<form method="POST">
				<legend>Formulario Vehículos</legend>
				
				<div class="form-group">
					<label for="">id</label>
					<input type="text" name="id" class="form-control" required="required" title="id" autofocus>
				</div>

				<div class="form-group">
					<label for="">Fabricante</label>
					<input type="text" name="fabricante" class="form-control" required="required" title="Fabricante">
				</div>

				<div class="form-group">
					<label for="">Modelo</label>
					<input type="text" name="modelo"  class="form-control" required="required" title="Modelo">
				</div>

				<div class="form-group">
					<label for="">Combustible</label>
					<select class="form-control" name="combustible">
						
						<!-- PHP: Genera lista select con los tipos compbustibles -->

						<?php foreach ($tipos as $tipo): ?>
							<option value="<?=$tipo ?>"><?=$tipo ?></option>
						<?php endforeach; ?>
    				
    				</select>
				</div>

				<div class="form-group">
					<label for="">Motor</label>
					<input type="text" name="motor"  class="form-control" required="required" title="Motor">
				</div>

				<div class="form-group">
					<label for="">Precio</label>
					<input type="number" name="precio" step="any" class="form-control" required="required" title="Precio">
				</div>

				<a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>
				<button type="reset" class="btn btn-secondary">Reset</button>
				<button type="submit" class="btn btn-primary" formaction="anadirVehiculo.php">Añadir</button>
				
			</form>

		</section>

	<?php 

	}

	# Genera código HTML para permitir editar los datos de un vehículo

	function formEditVehiculo($tipos, $key, $id, $fabricante, $modelo, $combustible, $motor, $precio) {

	?>

	<section>
		<form action="actualizar.php?indice=<?=$key; ?>" method="POST">
			<legend>Formulario Libros</legend>
			
			<div class="form-group">
				<label for="">id</label>
				<input type="text" name="id" class="form-control" required="required" title="id" autofocus value="<?= $id; ?>">
			</div>

			<div class="form-group">
				<label for="">Fabricante</label>
				<input type="text" name="fabricante" class="form-control" required="required" title="fabricante" value="<?= $fabricante; ?>">
			</div>

			<div class="form-group">
				<label for="">Modelo</label>
				<input type="text" name="modelo"  class="form-control" required="required" title="Modelo" value="<?= $modelo; ?>">
			</div>

			<div class="form-group">
				<label for="">Combustible</label>
				<select class="form-control" name="combustible">
						
					<!-- PHP: Genera lista select con los tipos compbustibles -->
					<!-- y selecciona la opción correspondiente -->

					<?php foreach ($tipos as $tipo): ?>
						<option 
							value="<?=$tipo ?> "
							<?= ($tipo == $combustible) ? "selected ": null ?>
						><?=$tipo ?></option>
					<?php endforeach; ?>
    				
    			</select>
			</div>

			<div class="form-group">
				<label for="">Motor</label>
				<input type="text" name="motor"  class="form-control" required="required" title="Motor" value="<?= $motor; ?>">
			</div>

			<div class="form-group">
				<label for="">Precio</label>
				<input type="number" step="any" name="precio"  class="form-control" required="required" title="Precio" value="<?= $precio; ?>">
			</div>

			<a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>
			<button type="submit" class="btn btn-primary">Actualizar</button>	
		</form>
	</section>

	<?php 
	}
 ?>