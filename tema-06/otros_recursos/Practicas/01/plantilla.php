
<?php 
/* 
	Módulo de plantillas Gestión Usuarios

	Actividad 4.4 - Tema 4 POO DAW 17/18
*/


// <head>
function headPlantilla() {
	
	?>
		<!-- Cabecera Plantilla -->
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Google Materail Icons -->
		    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      		rel="stylesheet">

		    <!-- Bootstrap CSS -->
		    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		    <!-- Personal CSS -->
	    	<link rel="stylesheet" href="estilos.css" TYPE="text/css">
			
			<title>Manejo de Sesiones</title>
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
		<hgroup class="jumbotron text-center">
				<h1>Act. 5.1 Manejo de Sesiones</h1>
                <h3 class="text-muted">Tema 5. Control de Sesiones</h>
		</hgroup>
	<?php 
}


//<nav> Menú
function menuPlantilla () {

?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		    </ul>
		    <span class="navbar-item">		      
		        <a class="nav-link" href="login.php">Login</a>
		    </span>
		  </div>
	</nav>

<?php 

}


//<nav> Menú
function menuConLogin () {

?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		    </ul>
		    <span class="navbar-item">		      
		        <a class="nav-link" href="logout.php">Logout</a>
		    </span>
		  </div>
	</nav>

<?php 

}


function menuAcceso ($pUsuario) {

?>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="acceso.php">Usuarios <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item ">
        		<a class="nav-link" href="formNuevo.php">Añadir</a>
      		  </li>
     
		      <li class="nav-item">
		        <a class="nav-link" href="#">Eliminar</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Ordenar
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="ordenar.php?criterio=Usuario">Usuario</a>
		          <a class="dropdown-item" href="ordenar.php?criterio=Email">Email</a>
		          <a class="dropdown-item" href="ordenar.php?criterio=Tipo">Tipo</a>
		          <a class="dropdown-item" href="ordenar.php?criterio=Clave">Clave</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		    <span class="navbar-item">
		    	<?=' '.$pUsuario; ?>		      
		        <a class="nav-link" href="logout.php">Logout</a>
		        
		    </span>
		  </div>
	</nav>

<?php 

}


//<footer>
function footerPlantilla () {

	?>
		<hr>
		<p>&copy; DWES - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
	
	<?php 
}

//Campos del Formulario añadir
function camposForm () {

	?>

		<div class="form-group">
			<label for="">Usuario</label>
			<input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Nombre Usuario" autofocus>
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" id="inputEmail" class="form-control" required="required" title="Email" placeholder="name@example.com">
		</div>

		<div class="form-group">
			<label for="tipo">Tipo Usuario:</label>
			<select class="form-control" name="tipo">
			    <option value="Administrador">Administrador</option> 
		   		<option value="Editor">Editor</option> 
				<option value="Colaborador">Colaborador</option>
				<option value="Visitante">Visitante</option> 
			</select>
		</div>

		<div class="form-group">
			<label for="clave">Password:</label>
			<input type="password" class="form-control" name="clave" required="required">
		</div>
	<?php 
	
}

/**
*  @nombre: camposFormEditar()
*  @descripción: formulario con los valores de un objeto editables
*  @param: $pUsuario -> objeto tipo usuario
*  @return:
**/

function camposFormEditar (usuario $pUsuario) {

	?>

		<div class="form-group">
			<label for="">Usuario</label>
			<input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Nombre Usuario"  value =

			"<?=$pUsuario->getUsuario()?>" 
			autofocus
			>
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" id="inputEmail" class="form-control" required="required" title="Email" placeholder="name@example.com" value=
			"<?=$pUsuario->getEmail()?>">
		</div>

		<div class="form-group">
			<label for="tipo">Tipo Usuario:</label>
			<select class="form-control" name="tipo">

			    <option value="Administrador" 
			    <?= ($pUsuario->getTipo() == 'Administrador') ? 'selected': '';  ?>
			    >Administrador</option> 
		   		
		   		<option value="Editor" 
				<?= ($pUsuario->getTipo() == 'Editor') ? 'selected': '';  ?>
		   		>Editor</option> 
				
				<option value="Colaborador" 
				<?= ($pUsuario->getTipo() == 'Colaborador') ? 'selected': '';  ?>
				>Colaborador</option>
				
				<option value="Visitante" 
				<?= ($pUsuario->getTipo() == 'Visitante') ? 'selected': '';  ?>
				>Visitante</option>
				
			</select>
		</div>

		<div class="form-group">
			<label for="clave">Password:</label>
			<input type="password" class="form-control" name="clave" required="required" value="<?=$pUsuario->getClave() ?>

			">
		</div>
	<?php 
	
}


//Campos del Formulario Mostrar
function camposFormMostrar (usuario $pUsuario) {

	?>

		<div class="form-group">
			<label for="">Usuario</label>
			<input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Nombre Usuario"  value =

			"<?=$pUsuario->getUsuario()?>" 
			autofocus 
			disabled
			>
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" id="inputEmail" class="form-control" required="required" title="Email" placeholder="name@example.com" value=
			"<?=$pUsuario->getEmail()?>"
			disabled
			>
		</div>

		<div class="form-group">
			<label for="tipo">Tipo Usuario:</label>
			<select class="form-control" name="tipo" disabled>

			    <option value="Administrador" 
			    <?= ($pUsuario->getTipo() == 'Administrador') ? 'selected': '';  ?>
			    >Administrador</option> 
		   		
		   		<option value="Editor" 
				<?= ($pUsuario->getTipo() == 'Editor') ? 'selected': '';  ?>
		   		>Editor</option> 
				
				<option value="Colaborador" 
				<?= ($pUsuario->getTipo() == 'Colaborador') ? 'selected': '';  ?>
				>Colaborador</option>
				
				<option value="Visitante" 
				<?= ($pUsuario->getTipo() == 'Visitante') ? 'selected': '';  ?>
				>Visitante</option>
				
			</select>
		</div>

		<div class="form-group">
			<label for="clave">Password:</label>
			<input type="password" class="form-control" name="clave" required="required" value="<?=$pUsuario->getClave() ?>"
			disabled
			>
		</div>
	<?php 
	
}

//Cabecera Tabla Contactos
function cabTabla(){
	
	?>

	<tr>
		<th>Usuario</th>
		<th>Email</th>
		<th>Tipo</th>
		<th>Password</th>
		<th>Acciones</th>
	</tr>

	<?php 
}

/**
* @nombre: plantilla
* @descripción: muestra en una plantilla los datos del array
* @param: $pUsuarios es un objeto de la clase usuarios (array de objetos de la clase usuario)
* @return:
**/
function plantilla(usuarios $pUsuarios) {

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
						
						<table class="table table-hover">
							<thead>
								<?php cabTabla(); ?>
							</thead>
							<tbody>
								<?php
									//muestra todos los contactos de la agenda 
							 		$pUsuarios->mostrarUsuarios();

							 		// Mostrar número de elementos
							 		$pUsuarios->mostrarNumElementos();
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