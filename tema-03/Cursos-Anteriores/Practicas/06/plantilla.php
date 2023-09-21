
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
			
			<title>Gestión Artículos</title>
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
			<h3>Practica 6 - Gestion de Articulos</h3>
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
          <a class="dropdown-item" href="ordenar.php?criterio=Descripcion">Descripción</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Modelo">Modelo</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Categoria">Categoría</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Unidades">Unidades</a>
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
		<p>&copy; DWES - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
	
	<?php 
}

//Campos del Formulario
function camposFormArticulos () {

	echo '
		<div class="form-group">
			<label for="">Codigo</label>
			<input type="number" name="cod" id="inputCod" class="form-control" required="required" title="Codigo" autofocus>
		</div>

		<div class="form-group">
			<label for="">Descripcion</label>
			<input type="text" name="desc" id="inputDesc" class="form-control" required="required" title="Descripcion">
		</div>

		<div class="form-group">
			<label for="">Modelo</label>
			<input type="text" name="model" id="inputModel" class="form-control" required="required" title="Modelo">
		</div>
		
		<div class="form-group">
			<label for="">Categoria</label>
			<select name="cat" id="inputCat" class="form-control" required="required">
				<option value="Almacenamiento">Almacenamiento</option>
				<option value="Consolas">Consolas</option>
				<option value="TVs">TVs</option>
				<option value="Perifericos">Perifericos</option>
			</select>
		</div>

		<div class="form-group">
			<label for="">Unidades</label>
			<input type="number" name="unit" id="inputUnit" class="form-control" required="required" title="Unidades">
		</div>

		<div class="form-group">
			<label for="">Precio</label>
			<input type="foat" name="precio" id="inputPrecio" class="form-control" required="required" title="Precio">
		</div>
	
	';
}

//Cabecera Tabla Contactos
function cabTablaArticulos(){
	
	?>

	<tr>
		<th>Código</th>
		<th>Descripción</th>
		<th>Modelo</th>
		<th>Categoría</th>
		<th>Unidades</th>
		<th>Precio</th>
	</tr>

	<?php 
}

//Muestra todos los contactos de la agenda
function mostrarArticulos($pArticulos) {

	foreach ($pArticulos as $articulo) {
 		echo "<tr>";
 		foreach ($articulo as $campos) {
 			echo "<td>";
 			echo "$campos";
 			echo "</td>";
 		}
		echo "</tr>";
	}
}

//Muestra número de contactos de la agenda
function mostrarNumArticulos($pNumArticulos) {

	echo "<tr><td colspan='3'>";
	echo "Artículos: ";
	echo $pNumArticulos;
	echo "</td></tr>";
}

//Muestra un solo artículo
function showArticulo($pArticulos, $pKey) {

	

	echo "<tr>";
	foreach ($pArticulos[$pKey] as $campos) {
		echo "<td>";
		echo $campos;
		echo "</td>";
	}
	echo "</tr>";

	
}


function plantillaArticulos($pArticulos) {

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
								<?php cabTablaArticulos(); ?>
							</thead>
							<tbody>
								<?php
									//muestra todos los contactos de la agenda 
							 		mostrarArticulos($pArticulos);

							 		// Mostrar número de contactos
							 		mostrarNumArticulos(count($pArticulos));
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