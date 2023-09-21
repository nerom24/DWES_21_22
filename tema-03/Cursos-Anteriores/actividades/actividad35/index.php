<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3.5</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">	
</head>
<nav></nav>
<body>
	<section>
		<article>
			<div class="container">
				<h1>Formulario</h1>
				<form method="POST" action="validarForm.php">
					<div class="form-group">
						<label for="inputNombre" >Nombre</label>
						<input type="text" class="form-control" name="inputNombre" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="inputApellidos" >Apellidos</label>
						<input type="text" class="form-control" name="inputApellidos" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="inputUsuario" >Usuario</label>
						<input type="text" class="form-control" name="inputUsuario" placeholder="Nombre">
					</div>
					<div class="form-group">
    					<label for="inputPassword">Contraseña</label>
    					<input type="password" class="form-control" name="inputPassword" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="InputEmail1">Email</label>
   						<input type="email" class="form-control" name="inputEmail1" aria-describedby="emailHelp" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="InputUrl">Url</label>
   						<input type="url" class="form-control" name="inputUrl" placeholder="Url">
					</div>
					<div class="form-group">
						<label for="inputEdad">Edad</label>
						<input type="number" name="inputEdad" placeholder="Edad" class="form-control">
					</div>
					<div class="form-group">
    					<label for="Select">Estudios cursados</label>
							<input class="form-check-input" type="checkbox" name="Checkbox" value="Primaria">Primaria
						 	<input class="form-check-input" type="checkbox" name="Checkbox" value="Secundaria">Secundaria
							<input class="form-check-input" type="checkbox" name="Checkbox" value="Bachillerato"> Bachillerato
							<input class="form-check-input" type="checkbox" name="Checkbox" value="GradoMedioFP"> Grado Medio FP
							<input class="form-check-input" type="checkbox" name="Checkbox" value="GradoSuperiorFP"> Grado Superior FP
							<input class="form-check-input" type="checkbox" name="Checkbox" value=" GradoUniversitario">  Grado Universitario
					</div>	
						 <button type="submit" class="btn btn-primary">Validar</button>
				</form>
			</div>
		</article>
	</section>
</body>
</html>
