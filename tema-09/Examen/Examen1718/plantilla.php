
<?php 
/* 
	Módulo de plantillas Gestión Cursos

	Actividad 6.4 - Tema 6 DAW 17/18
*/
class plantilla{
	CONST TITULO = "Examen Tema 7, 8 y 9";
	CONST CABECERA = "Alumno";
	CONST SUBCABECERA = "Examen Tema 7, 8, 9 - 2DAW 17/18";
	CONST CREDITOS = "Tu nombre";


	function headPlantilla() {
		
		?>
			<!-- Cabecera Plantilla -->
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	     		 rel="stylesheet">
	     		 
			    <!-- Bootstrap CSS -->
			    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			    <!-- Personal CSS -->
		    	<link rel="stylesheet" href="estilos.css" TYPE="text/css">
				
				<title><?=self::TITULO ?></title>
			</head>
		
		<?php 
	}

	//<header>
	function headerPlantilla () {

		?>
			<!-- Cabecera de títulos -->
			<hgroup class="jumbotron text-center">
					<h1><?=self::CABECERA ?></h1>
	                 <h3 class="text-muted"><?=self::SUBCABECERA ?></h3>
			</hgroup>
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

	//<footer>
	function footerPlantilla () {

		?>

		<hr>
		<p>&copy; DWES - <?=self::CREDITOS ?> - 2º DAW - Curso 17/18</p>
			
		<?php 
	}


	//<nav> Menú
	function menu() {

	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item ">
	        <a class="nav-link" href="#">Imprimir PDF</a>
	      </li>
	     
	    </ul>
	    <form action="mostrar.php" class="form-inline my-2 my-lg-0" method="POST">
	      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="codigo" id="inputArt">
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
	    </form>
	  </div>
	</nav>
		
	<?php 
	}




	public function index($consulta){
		?>
			<!DOCTYPE html>
			<html lang="es">
			<?php
				$this->headPlantilla();
			?>
			<body>
				<div class="container">
					<header>
						<?php $this->headerPlantilla(); ?>
					</header>
					<nav>
						<?php $this->menu(); ?>
					</nav>
					<section>
						<article>
							<div class="row">
								<div class="col">
									<table class="table table-hover table-sm">
										<legend>Corredores</legend>
										<thead class="thead-dark">
											<?php 
												$consulta->mostrarCabeceraCorredores(); 
											?>
										</thead>
										<tbody>
											<?php
												//muestra todos los vehiculos
												$consulta->mostrarCorredores();
												// Mostrar número de vehiculos
												$consulta->mostrarNumElementos();			
											?>
										</tbody>
									</table>
								</div>
							</div>
						</article>
					</section>
					<br>
					<footer>
						<?php $this->footerPlantilla(); ?>
					</footer>
				</div>
				</div>
				<?php $this->footerJquery(); ?>
			</body>
			</html>


		<?php
	}

	
}
