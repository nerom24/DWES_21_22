
<?php 
/* 
	Módulo de plantillas Gestión Articulos

	Actividad 3.6 - Tema 3 DAW 17/18
*/


// <head>
function headPlantilla() {
	
	?>
		<!-- Cabecera Plantilla -->
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		    <!-- Bootstrap CSS -->
		    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		    <!-- Personal CSS -->
	    	<link rel="stylesheet" href="estilos.css" TYPE="text/css">
			
			<title>Gestión Vehículos</title>
		</head>
	
	<?php 
}

//jquery
function footerJquery() {

	?>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

	<?php 
}
//<header>
function headerPlantilla () {

	?>
		<!-- Cabecera de títulos -->
		<hgroup>
			<h1 class="text-muted">Tema 03 - DWES</h1>
			<h3>Examen 01 - Solución</h3>
		</hgroup>
	<?php 
}

//<nav> Menú
function menuPlantilla () {

	?>
		<!-- menu -->
		<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link" href="index.php">Inicio</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" href="formNuevo.php">Nuevo</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="formActualizar.php">Actualizar</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="formBuscar.php">Buscar</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="formEliminar.php">Eliminar</a>
			  </li>
		</ul>
	
	<?php 
}


//<nav> Menú
function menuPlantilla2 () {

	?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="formNuevo.php">Añadir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formActualizar.php">Actualizar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="formEliminar.php">Eliminar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ordenar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ordenar.php?criterio=Codigo">Código</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Fabricante">Fabricante</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Fabricante">Modelo</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Combustible">Combustible</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Motor">Motor</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Precio">Precio</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
    <form action="mostrar.php" class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="codigo" id="inputArt">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
	
	<?php 
}


//<footer>
function footerPlantilla () {

	?>
		<p>&copy; DWES -  - 2º DAW - Curso 17/18</p>
	
	<?php 
}

//Campos del Formulario
function camposFormVehiculos () {

	echo '
		<div class="form-group">
			<label for="">Codigo</label>
			<input type="number" name="codigo" id="inputCod" class="form-control" required="required" title="Codigo" autofocus>
		</div>

		<div class="form-group">
			<label for="">Fabricante:</label>
			<input type="text" name="fabricante" id="inputFab" class="form-control" required="required" title="Fabricante">
		</div>

		<div class="form-group">
			<label for="">Modelo</label>
			<input type="text" name="modelo" id="inputModel" class="form-control" required="required" title="Modelo">
		</div>
		
		<div class="form-group">
			<label for="">Combustible</label>
			<select name="combustible" id="inputCat" class="form-control" required="required">
				<option value="Diesel">Diesel</option>
				<option value="Gasolina">Gasolina</option>
				<option value="Híbrido">Híbrido</option>
				<option value="Eléctrico">Eléctrico</option>
			</select>
		</div>

		<div class="form-group">
			<label for="">Motor</label>
			<input type="number" name="motor" id="inputMot" class="form-control" required="required" title="Motor">
		</div>

		<div class="form-group">
			<label for="">Precio</label>
			<input type="foat" name="precio" id="inputPrecio" class="form-control" required="required" title="Precio">
		</div>
	
	';

	}

//Cabecera Tabla Contactos
function cabTablaVehiculos(){
	echo '<TR>';
		echo '<th>';
		echo 'Código';
		echo '</th>';
		echo '<th>';
		echo 'Fabricante';
		echo '</th>';
		echo '<th>';
		echo 'Modelo';
		echo '</th>';
		echo '<th>';
		echo 'Combustible';
		echo '</th>';
		echo '<th>';
		echo 'Motor';
		echo '</th>';
		echo '<th>';
		echo 'Precio';
		echo '</th>';
	echo '</TR>';
}

//Muestra todos los vehículos de array
function mostrarVehiculos($pArray) {

	foreach ($pArray as $registro) {
 		echo "<tr>";
 		foreach ($registro as $campos) {
 			echo "<td>";
 			echo "$campos";
 			echo "</td>";
 		}
		echo "</tr>";
	}
}

//Muestra número de vehículos 
function mostrarNumVehiculos($pNumReg) {

	echo "<tr><td colspan='6'>";
	echo "Vehículos: ";
	echo $pNumReg;
	echo "</td></tr>";	
}

//Muestra un solo vehículo
function showVehiculo($pArray, $pKey) {

	echo "<tr>";
	foreach ($pArray[$pKey] as $campos) {
		echo "<td>";
		echo $campos;
		echo "</td>";
	}
	echo "</tr>";

	
}


function plantillaVehiculos($pVehiculos) {

	?>

		<!DOCTYPE html>
		<html lang="es">
		<?php 

			headPlantilla();	

		?>
		<body>
			<div class="container">
				<header>
					<?php headerPlantilla(); ?>
				</header>
				<nav>
					<?php menuPlantilla2(); ?>
				</nav>
				<section>
					<article>
						
						<table class="table table-hover">
							<thead>
								<?php cabTablaVehiculos(); ?>
							</thead>
							<tbody>
								<?php
									//muestra todos los vehiculos
									mostrarVehiculos($pVehiculos);
									// Mostrar número de vehiculos
									mostrarNumVehiculos(count($pVehiculos));			
								?>
							</tbody>
						</table>
						
					</article>
				</section>
				<br>
			
				<footer>
					<?php footerPlantilla(); ?>
				</footer>
			</div>
			</div>
			<?php footerJquery(); ?>
		</body>
		</html>

	<?php 
}
