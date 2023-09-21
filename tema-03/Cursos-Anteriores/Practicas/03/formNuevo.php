
<!-- 
	Práctica: 03
	Tema: 03 DWES
	Curso: 2º DAW - 2017/2018
	Descripción: Agenda de contactos con usuario, nombre y telefono. Métodos Añadir, Modificar, eliminar y buscar. Array asociativo con usuario como índice.
	Autor: Juan Carlos Moreno
	Fecha: 18/10/2017
	Fichero: nuevo.php
	Tarea: Muestra formulario para añadir contacto 
-->
  

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Plantilla Básica con Bootstrap</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1 class="text-muted">Tema 03 - DWES</h1>
					<h3>Practica 3 - Agenda de contactos</h3>
				</hgroup>
		</header>
		<nav>
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
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Añadir Conctacto</legend>
				
					<div class="form-group">
						<label for="">Usuario</label>
						<input type="text" name="user" id="inputUser" class="form-control" required="required" title="Usuario" autofocus>
					</div>

					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" name="nom" id="inputNom" class="form-control" required="required" title="Nombre">
					</div>

					<div class="form-group">
						<label for="">Telefono</label>
						<input type="tel" name="tel" id="inputTel" class="form-control" required="required" title="Telefono">
					</div>

					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="anadirContacto.php">Añadir</button>
					
				</form>
			</article>
		</section>
		<br>
		<hr>
		<footer>
			<p>&copy; DWES - Juan Carlos Moreno - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>