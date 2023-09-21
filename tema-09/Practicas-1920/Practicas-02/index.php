<?php

/*
		Tema : 07 - Archivos PHP
		Curso: 2DAW - 19/20
		Descripción: Archivos con texto planto datospersonales.txt
		Autor: Juan Carlos
		Fecha: 22/1/2020
*/
	
	session_start();

	if (isset($_SESSION['mensaje'])) {

		$mensaje = $_SESSION['mensaje'];
		unset($_SESSION['mensaje']);
		
	}

	$archivo = basename($_SERVER['PHP_SELF']);
	
?> 

<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
	<form action="procesarEmail.php" method="POST" role="form" enctype="multipart/form-data">
		<legend>Formulario Email</legend>

        <?php require_once("template/partials/mensaje.php") ?>
		
		<!-- Formulario -->
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

    	<div class="form-group">
  			<label for="comment">Mensaje:</label>
  			<textarea class="form-control" name="mensaje" rows="5" id="comment"></textarea>
		</div>
		
		<div class="form-group">
    		<label for="inputFile">Archivos Adjuntos</label>
    		<input type="file" class="form-control" name="archivo[]" multiple accept="application/pdf,image/*">
    	</div>
		<button type="reset" class="btn btn-secondary">Limpiar</button>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>

    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>


