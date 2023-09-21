<?php
   //....
   //....
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="ckeditor/adapters/jquery.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="ckeditor/ckeditor.js"></script>
	<script  type="text/javascript">
		function empezar() {	
			CKEDITOR.replace("editor1");	
		}
	</script>
	<title>Ejercicio 9.3</title>
</head>
<body onload="empezar()">
	<!-- Especificar main-menu() -->
	<div class="container">
		<header>
				<hgroup>
					<h1>Ejercicio 2</h1>
					<h2>Examen Tema 8 y 9</h2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<form action="procesarEmail.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="inputAsunto">Asunto</label>
					    <input type="text" class="form-control" name="inputAsunto" placeholder="Asunto" >
  					</div>

					<div class="form-group">
					    <label for="inputEmail">Destinatario </label>
					    <input type="email" multiple="multiple" class="form-control" name="inputEmail" placeholder="Email" ">
					</div>
					
  					<div class="form-group">
    					<label for="inputRespuesta">Repuesta</label>
    					<input type="email" multiple="multiple" class="form-control" name="inputRespuesta" placeholder="Email Repuesta">
  					</div> 					
  					
  					<div class="form-group">
    					<label for="inputFile">Archivos Adjuntos</label>
    					<input type="file" name="inputFile[]" multiple="true">
    				</div>
    				
    				<div>
    					<textarea name="editor1" id="editor" cols="30" rows="10">Mensaje ...
    					</textarea>
    				</div>
    				
    				<div class="form-group">
    				<br>
    				<div class="btn-goup">
    				<button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
    				<button type="submit" name="volver" class="btn btn-default" formaction="index.php">Volver</button>
    				</div>
    				</div>
				</form>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>