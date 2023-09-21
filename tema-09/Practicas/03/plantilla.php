
<?php 


class plantilla{
	CONST TITULO = "Uso Clase PHPmailer";
	CONST CABECERA = "Actividad 9.2 - Clase PHPmailer";
	CONST SUBCABECERA = "Tema 9. Envío Email";
	CONST CREDITOS = "Juan Carlos Moreno";



	public function headPlantilla() {
		
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

			<script src="ckeditor/ckeditor.js"></script>	

			<title><?=self::TITULO ?></title>
		</head>
		
		<?php 
	}

	//<header>
	public function headerPlantilla () {

		?>
		<!-- Cabecera de títulos -->
		<hgroup class="jumbotron text-center">
			<h1><?=self::CABECERA ?></h1>
			<h3 class="text-muted"><?=self::SUBCABECERA ?></h3>
		</hgroup>
		<?php 
	}

	//jquery
	public function footerJquery() {

		?>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="jquery/jquery-3.2.1.min.js"></script>
		<script src="ckeditor/adapters/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="popper/popper.js"></script>
		<script src="ckeditor/ckeditor.js"></script>
		<!-- ck-editor -->
		
		<script  type="text/javascript">
			CKEDITOR.replace("mensaje");		
		</script>

		<?php 
	}

	//<footer>
	public function footerPlantilla () {

		?>

		<hr>
		<p>&copy; DWES - <?=self::CREDITOS ?> - 2º DAW - Curso 17/18</p>

		<?php 
	}


	//<nav> Menú
	public function menuPlantilla () {

		?>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>


				</ul>
			</div>
		</nav>

		<?php 
	}



	//Campos del Formulario Nuevo
	public function formulario () {
		?>
		<div class="form-group">
			<label for="">Destinatario</label>
			<input type="email" name="destinatario" class="form-control" required="required" title="destinatario " autofocus>
		</div>

		<div class="form-group">
			<label for="">Remitente</label>
			<input type="email" name="remitente" class="form-control" required="required" title="destinatario " autofocus>
		</div>


		<div class="form-group">
			<label for="">Asunto</label>
			<input type="text" name="asunto" class="form-control" required="required" title="Asunto" >
		</div>

    	<!-- <div class="form-group">
    	  			<label for="comment">Mensaje:</label>
    	  			<textarea class="form-control" name="mensaje" rows="5" id="comment"></textarea>
    	</div> -->

    	<div>
    		<label >Mensaje:</label>
			<textarea name="mensaje" id="editor1" >
			</textarea>
    	</div>
		
		<div class="form-group">
    		<label for="inputFile">Archivos Adjuntos</label>
    		<input type="file" class="form-control" name="archivo">
    	</div>

		<?php
	}


	public function index(){
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
					<?php $this->menuPlantilla(); ?>
				</nav>
				<section>
					<article>
						<form action="procesarEmail.php" method="POST" role="form" enctype="multipart/form-data">
							<legend>Formulario Email</legend>

							<?php $this->formulario(); ?>
							
							<button type="reset" class="btn btn-secondary">Limpiar</button>
							<button type="submit" class="btn btn-primary">Enviar</button>
						</form>
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

