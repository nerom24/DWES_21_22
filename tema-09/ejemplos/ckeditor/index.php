
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="estilos.css"> -->
	<script type="text/javascript" src="ckeditor/ckeditor.js">
	</script>
	<title>Formulario Email con PHPMailer</title>
</head>
<body>
	<header class="jumbotron text-center">
            <h1>Actividad 9.3 Formulario Envío Email con PHPMailer</h1>
            <h2>Tema 9. Enviar Email con PHP</h2>
    </header>
	
	<div class="container">
		
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<form>
			  <div class="form-group">
			    <label for="emailDes">Destinatario</label>
			    <input type="email" class="form-control" name="emailDes" placeholder="Email Destinatario" required="requierd" autofocus="autofocus">
			  </div>
			  <div class="form-group">
			    <label for="asunto">Asunto</label>
			    <input type="text" class="form-control" name="asunto" placeholder="Asunto del Mensaje" required="requierd">
			  </div>
			  <div class="form-group">
			    <label for="mensaje">Mensaje</label>
			    <textarea rows="4" cols="80" class="form-control" name="mensaje" required="requierd" placeholder="Escriba el Texto del Mensaje ..."></textarea>
			    <script type="text/javascript">
				CKEDITOR.replace ('mensaje');
				</script>
			  </div>
			  <button type="submit" class="btn btn-default">Enviar</button>
			</form>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
