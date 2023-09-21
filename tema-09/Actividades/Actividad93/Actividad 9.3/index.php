<?php session_start() ?>
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
					<h1>Actividad 9.2</h1>
					<h2>Javier holgado Barreno</h2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php if (isset($_COOKIE['error'])) {
				echo '<div class="alert alert-success alert-dismissable">
				  	<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_COOKIE['error'].'</div>';
				  setcookie("error","",time()-1);
				} ?>
			</article>
			<article>
				<form action="validarEmail.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
					    <label for="inputEmail">Destinatario </label>
					    <input type="email" multiple="multiple" class="form-control" name="inputEmail" placeholder="Email" required="required" <?php if (isset($_SESSION['correo'][1])) {
    						echo "value=" . $_SESSION['correo'][1];} ?>>
					</div>
					<div class="form-group">
						<label for="inputAsunto">Asunto</label>
					    <input type="text" class="form-control" name="inputAsunto" placeholder="Asunto" required="required" <?php if (isset($_SESSION['correo'][2])) {
    						echo "value=" . $_SESSION['correo'][2];} ?>>
  					</div>
  					<div class="form-group">
    					<label for="inputRespuesta">Repuesta</label>
    					<input type="email" multiple="multiple" class="form-control" name="inputRespuesta" placeholder="Email Repuesta" <?php if (isset($_SESSION['respuesta'])) {
    						echo "value=".$_SESSION['respuesta'];} ?>>
  					</div>
  					<div class="form-group">
    					<label for="inputCC">CC</label>
    					<input type="email" multiple="multiple" name="inputCC" class="form-control" placeholder="CC" <?php if (isset($_SESSION['CC'])) {
    						echo "value=".$_SESSION['CC'];} ?>>
  					</div>
  					<div class="form-group">
    					<label for="inputBCC">BCC</label>
    					<input type="email" multiple="multiple" name="inputBCC" class="form-control" placeholder="BCC" <?php if (isset($_SESSION['BCC'])) {
    						echo "value=".$_SESSION['BCC'];} ?>>
  					</div>	
  					<div class="form-group">
    					<label for="inputFile">Archivos Adjuntos</label>
    					<input type="file" name="inputFile[]" multiple="true">
    				</div>
    				<div class="form-group">
    					<label for="inputFile">Añadir Imagen al final del texto</label>
    					<input type="file" name="inputImagen[]" multiple="true">
    				</div>
    				<div>
    					<textarea name="editor1" id="editor" cols="30" rows="10"><?php if (isset($_SESSION['correo'][0])) {
    						echo $_SESSION['correo'][0];} ?>
    					</textarea>
    				</div>
    				<br>
    				<div class="btn-goup pull-right"><button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button></div><br>
				</form>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>