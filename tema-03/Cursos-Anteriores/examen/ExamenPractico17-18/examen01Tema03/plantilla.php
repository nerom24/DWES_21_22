
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
			<h3>Examen de ...</h3>
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
          <a class="dropdown-item" href="ordenar.php?criterio=Modelo">Modelo</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Combustible">Combustible</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Motor">Motor</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Precio">Precio</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
    <form action="mostrarArticulo.php" class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="art" id="inputArt">
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

	

//Cabecera Tabla Contactos
function cabTablaVehiculos(){
	
	?>

	

	<?php 
}

//Muestra todos los vehículos de array
function mostrarVehiculos() {

	
}

//Muestra número de vehículos 
function mostrarNumVehiculos() {

	
}

//Muestra un solo vehículo
function showArticulo() {

	

	
}


function plantillaVehiculos() {

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
								<?php //muestra cabecera tabla ?>
							</thead>
							<tbody>
								<?php
									//muestra todos los vehiculos
							 		

							 		// Mostrar número de vehiculos
							 		
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