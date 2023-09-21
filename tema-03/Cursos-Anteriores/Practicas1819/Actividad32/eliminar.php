<?php 

	/** Fichero: eliminar.php
	*   $_GET: indice
	*   Descripción: Elimina un registro de la tabla libros
	*   Fecha: 10/10/2018
	**/
	
	#Leemos el índice de registro que queremos eliminar

	$indice = $_GET["indice"];

	# Declaración de la matriz libros

	$libros = 

	[
				
				[ 
					"idLibro" => 1,
					"Titulo" => "Los Señores del tiempo",
					"Autor" => "García Sénz de Urturi",
					"Genero" => "Novela",
					"Editorial" => "Planeta",
					"Paginas" => 448,
					"Precio" => 19.50
				],
				[ 
					"idLibro" => 2,
					"Titulo" => "El Rey recibe",
					"Autor" => "Eduardo Mendoza",
					"Genero" => "Novela",
					"Editorial" => "Seix Barral",
					"Paginas" => 368,
					"Precio" => 20.50
				],
				[ 
					"idLibro" => 3,
					"Titulo" => "Diario de una mujer",
					"Autor" => "Eduardo Mendoza",
					"Genero" => "Juvenil",
					"Editorial" => "Destino",
					"Paginas" => 144,
					"Precio" => 12.95
				],
	];

	# Eliminamos el registro correspondiente de la matriz
	
	unset($libros[$indice]);
	$libros = array_values($libros);

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
				        <a class="nav-link" href="nuevo.php">Nuevo</a>
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

			<!-- Mostrar tabla -->
			<section>
				
				<table class="table">
					<thead>
						<legend>Tabla Libros</legend>
						<!-- Mostrar Cabecera Tabla -->
						<tr>

							<?php foreach ($libros[0] as $key => $registros): ?>
								<th>
									<?php echo $key ?> 
								</th>
							<?php endforeach; ?>
								
						</tr>
					</thead>

					<tbody>
						<?php foreach ($libros as $registro): ?>
							<tr>
							<?php foreach ($registro as $campo): ?>
								<td>
									<?php echo $campo ?>
								</td>
							<?php endforeach; ?>
							</tr>
						<?php endforeach; ?>
						</tr>
					</tbody>
				</table>

			</section>
			
			<hr>
			<footer>&copy; DEW - Solución - 2ºDAW - Curso 18/19</footer>
		</div>

		<!-- Option