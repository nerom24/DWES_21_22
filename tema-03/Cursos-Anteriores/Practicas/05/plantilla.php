
<?php 
/* 
	Módulo de plantillas Agenda Contacto
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
	    	<!-- <link rel="stylesheet" href="estilos.css" TYPE="text/css"> -->
			
			<title>Gestión de Usuarios DAW 17-18</title>
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
			<h3>Actividad 3.5 - Gestión Usuarios</h3>
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


//<footer>
function footerPlantilla () {

	?>
		<p>&copy; DWES - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
	
	<?php 
}

//Campos del Formulario
function camposFormContactos () {

	?>
		<div class="form-group">
			<label for="">Usuario</label>
			<input type="text" name="user" id="inputUser" class="form-control" required="required" title="Usuario" autofocus>
		</div>

		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="nom" id="inputNom" class="form-control" required="required" title="Nombre">
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" id="email" class="form-control" required="required" title="Email">
		</div>

		<div class="form-group">
			<label for="">Tipo de usuario</label>
			<select name="tipo" id="inputTipo" class="form-control" required="required">
				<option value="Administrador">Administrador</option>
				<option value="Editor">Editor</option>
				<option value="Colaborador">Colaborador</option>
				<option value="Visitante">Visitante</option>
			</select>
		</div>

		<div class="form-group">
				<label for="contrasena">Contraseña</label>
				<input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="" required="required">
		</div>
	
	<?php 
}

//Cabecera Tabla Contactos
function cabTablaContactos(){
	
	?>

	<tr>
		<th>Usuario</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Tipo de usuario</th>
		<th>Contraseña</th>

	</tr>

	<?php 
}

//Muestra todos los contactos de la agenda
function mostrarContactos($pAgenda) {

	foreach ($pAgenda as $usuario=>$dato) {
 		echo "<tr>";
 		echo "<td>";
 		echo $usuario;
 		echo "</td>";
 		foreach ($dato as $dato) {
 			echo "<td>";
 			echo "$dato";
 			echo "</td>";
 		}
		echo "</tr>";
	}
}

//Muestra número de contactos de la agenda
function mostrarNumContactos($pNumContactos) {

	echo "<tr><td colspan='3'>";
	echo "Contactos: ";
	echo $pNumContactos;
	echo "</td></tr>";
}

//Muestra un solo contacto
function mostrarContacto($pAgenda, $pUsuario) {

	

	echo "<tr>";
	echo "<td>";
	echo "$pUsuario";
	echo "</td>";
	foreach ($pAgenda[$pUsuario] as $campos) {
		echo "<td>";
		echo $campos;
		echo "</td>";
	}
	echo "</tr>";

	
}


function plantillaAgenda($pAgenda) {

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
					<?php menuPlantilla(); ?>
				</nav>
				<section>
					<article>
						<form method="get">
							<table class="table table-hover">
								<thead>
									<?php cabTablaContactos(); ?>
								</thead>
								<tbody>
									<?php
										//muestra todos los contactos de la agenda 
								 		mostrarContactos($pAgenda);

								 		// Mostrar número de contactos
								 		mostrarNumContactos(count($pAgenda));
									?>
								</tbody>
							</table>
						</form>
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