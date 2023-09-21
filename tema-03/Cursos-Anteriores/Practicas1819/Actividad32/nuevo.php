<?php 
	
	/** Archivo: nuevo.php
	*   Descripción: formulario para añadir libro
	*   Curso 18/19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Actividad 3.2</title>	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrapp CSS -->

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	</head>
	<body>
		<div class="container">
			
			<!-- Cabecera -->

			<header>
				<hgroup>
					<h1>Gestión de Libros con Matrices</h1>
					<h2>Actividad 32 - Tema 03</h2>
				</hgroup>
			</header>

			<!-- Menú -->
			<section>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Nuevo</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Ordenar
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="ordenar.php?criterio=Titulo">Título</a>
					      <a class="dropdown-item" href="ordenar.php?criterio=Autor">Autor</a>
					      <a class="dropdown-item" href="ordenar.php?criterio=Paginas">Páginas</a>
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

			<!-- Mostrar formulario libros -->
			<section>

				<form method="POST">
					<legend>Formulario Libros</legend>
					
					<div class="form-group">
						<label for="">idLibro</label>
						<input type="text" name="idLibro" class="form-control" required="required" title="idLibro" autofocus>
					</div>

					<div class="form-group">
						<label for="">Título</label>
						<input type="text" name="titulo" class="form-control" required="required" title="Nombre">
					</div>

					<div class="form-group">
						<label for="">Autor</label>
						<input type="text" name="autor"  class="form-control" required="required" title="Autor">
					</div>

					<div class="form-group">
						<label for="">Género</label>
						<input type="text" name="genero"  class="form-control" required="required" title="Género">
					</div>

					<div class="form-group">
						<label for="">Editorial</label>
						<input type="text" name="editorial"  class="form-control" required="required" title="Editorial">
					</div>

					<div class="form-group">
						<label for="">Páginas</label>
						<input type="number" name="paginas"  class="form-control" required="required" title="Páginas">
					</div>

					<div class="form-group">
						<label for="">Precio</label>
						<input type="number" step="any" name="precio"  class="form-control" required="required" title="Precio">
					</div>

					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="anadirLibro.php">Añadir</button>
					
				</form>
				
				

			</section>
			
			<hr>
			<footer>&copy; DEW - Solución - 2ºDAW - Curso 18/19</footer>
		</div>

		<!-- Option