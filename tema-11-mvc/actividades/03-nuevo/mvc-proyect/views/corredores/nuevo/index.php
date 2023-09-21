
<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    
    <!-- Page Content -->
    <div class="container">
	<br><br><br><br>

		<?php require_once("template/partials/mensaje.php") ?>
		

		<!-- Estilo card de bootstrap -->
		<div class="card">
			<div class="card-header">
				<legend>Formulario Nuevo Corredor</legend>
			</div>
			<div class="card-body">
                <!-- Formulario -->
				<form method="POST" action="<?= URL ?>corredores/create">
					<!-- Nombre -->
					<div class="mb3">
						<label class="form-label">Nombre</label>
						<input name="nombre" type="text" class="form-control">
					</div>

					<!-- Apellidos -->
					<div class="mb3">
						<label class="form-label">Apellidos</label>
						<input name="apellidos" type="text" class="form-control">
					</div>

					<!-- Ciudad -->
					<div class="mb3">
						<label class="form-label">Ciudad</label>
						<input name="ciudad" type="text" class="form-control">
					</div>

					<!-- Sexo -->
					<div class="mb3">
						<label class="form-label">Sexo</label>
						<div class="form-control"> 
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="H" checked>
								<label class="form-check-label" for="inlineRadio1">Hombre</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="M">
								<label class="form-check-label" for="inlineRadio2">Mujer</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="S" >
								<label class="form-check-label" for="inlineRadio3">Sin Especificar </label>
							</div>
						</div>
					</div>

					<!-- Fecha Nacimiento -->
					<div class="mb3">
						<label class="form-label">Fecha de Nacimiento</label>
						<input name="fechaNacimiento" type="date" class="form-control">
					</div>

					<!-- Email -->
					<div class="mb3">
						<label class="form-label">Email</label>
						<input name="email" type="email" class="form-control">
					</div>

					<!-- DNI -->
					<div class="mb3">
						<label class="form-label">DNI</label>
						<input name="dni" type="text" class="form-control" pattern="[0-9]{8}[A-Za-z]{1}">
					</div>

					<!-- Categoría -->
					<div class="mb3">
						<label class="form-label">Categoría</label>
						<select class="form-control" name="id_categoria">
							<!-- Es una clave ajena, como value se pone el id de la categoría -->
							<?php foreach($this->categorias as $categoria): ?>
								<option value="<?=$categoria->id ?>"> <?=$categoria->categoria?> </option>
							<?php endforeach; ?>

						</select>
					</div>

					<!-- Club -->
					<div class="mb3">
						<label class="form-label">Club</label>
						<select class="form-control" name="id_club">
							<!-- Es una clave ajena, como value se pone el id del club -->
							<?php foreach($this->clubs as $club): ?>
								<option value="<?=$club->id ?>"> <?=$club->club?> </option>
							<?php endforeach; ?>

						</select>
					</div>

					<br>
					<!-- Botones -->
					<a href="<?= URL ?>corredores" class="btn btn-secondary" role="button">Cancelar</a>
					<button type="reset" class="btn btn-dark">Reset</button>
					<button type="submit" class="btn btn-primary">Añadir</button>
				</form>
				<!-- Fin de formulario -->
            </div>
			
			<div class="card-footer text-muted">
				
            </div>
		</div>
		<br><br><br>


    </div>

    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>