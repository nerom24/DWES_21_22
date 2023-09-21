
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Jquery Plugin Alertify</title>
	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="jquery/jquery.min.js"></script>
	<script src="alertify/alertify.min.js"></script>
  	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilosss.css">
	<link rel="stylesheet" type="text/css" href="alertify/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css">
	
	<script>
		$(document).ready(function(){
			$("#simple_alert").click(function() {
				alertify.alert("Mensaje de Alerta");
			});
			$("#simple_confirm").click(function() {
				alertify.confirm("Necesito Confirmación", function(e){
					if(e) {
						alertify.alert("Mensaje de Alerta");
					}

				});
			});
			$("#simple_prompt").click(function() {
				alertify.prompt("Necesito tu Nombre", function(e,astr){
					if (e) {
						alertify.alert(astr);
					}
				});
			});
		});
	</script>
	
</head>
<body>
	<header class="jumbotron text-center">
    	<h1>Plugin Alertify</h1> 
    	<h2>Aletas en PHP</h2> 
    </header>
	<div class="container">

	
	<nav>
	<!-- Especificar main-menu() -->
	
	<a href="#" class="btn btn-info" role="button" id="simple_alert">Simple Alerta</a>	
	<a href="#" class="btn btn-info" role="button" id="simple_confirm">Simple Confirmación</a>
	<a href="#" class="btn btn-info" role="button" id="simple_prompt">Simple prompt</a>	 
	
	</nav>	
	<footer>
		<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
	</footer>
	</div>
</body>
</html>
