
<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menuAut.php") ?>
    
    <!-- Page Content -->
    <div class="container">
		<br><br><br><br>

		<?php require_once("template/partials/mensaje.php") ?>
		<?php require_once("template/partials/error.php") ?>

		<!-- Estilo card de bootstrap -->
		<div class="card">
			<div class="card-header">
            <legend>Formulario Nuevo Corredor</legend>
			</div>
			<div class="card-body">
				<!-- Formulario nuevo corredor -->
				<form method="POST" action="<?= URL ?>corredores/create">
                    <!-- Nombre -->
					<div class="mb3">
						<label class="form-label">Nombre</label>
						<input name="nombre" type="text" class="form-control" value="<?= $this->corredor->nombre ?>">

						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['nombre'] ??= null ?>
						</span>

					</div>
                    <!-- Apellidos -->
					<div class="mb3">
						<label class="form-label">Apellidos</label>
						<input name="apellidos" type="text" class="form-control" value="<?= $this->corredor->apellidos ?>">
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['apellidos'] ??= null ?>
						</span>
					</div>
					<!-- Ciudad -->
					<div class="mb3">
						<label class="form-label">Ciudad</label>
						<input name="ciudad" type="text" class="form-control" value="<?= $this->corredor->ciudad ?>">
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['ciudad'] ??= null ?>
						</span>
					</div>
					<!-- Sexo -->
					<div class="mb3">
						<label class="form-label">Sexo</label>
						<div class="form-control"> 
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="H" <?= ($this->corredor->sexo == 'H')?'checked':null ?>>
								<label class="form-check-label" for="inlineRadio1">Hombre</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="M" <?= ($this->corredor->sexo == 'M')?'checked':null ?>>
								<label class="form-check-label" for="inlineRadio2">Mujer</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="" <?= ($this->corredor->sexo == '')?'checked':null ?>>
								<label class="form-check-label" for="inlineRadio3">Sin Especificar </label>
							</div>
						</div>
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['sexo'] ??= null ?>
						</span>
					</div>

					<!-- Fecha Nacimiento -->
					<div class="mb3">
						<label class="form-label">Fecha de Nacimiento</label>
						<input name="fechaNacimiento" type="date" class="form-control" value="<?= $this->corredor->fechaNacimiento ?>">
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['fechaNacimiento'] ??= null ?>
						</span>
					</div>

					<!-- Email -->
					<div class="mb3">
						<label class="form-label">Email</label>
						<input name="email" type="email" class="form-control" value="<?= $this->corredor->email ?>">
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['email'] ??= null ?>
						</span>
					</div>

					<!-- DNI -->
					<div class="mb3">
						<label class="form-label">DNI</label>
						<input name="dni" type="text" class="form-control" pattern="[0-9]{8}[A-Za-z]{1}" value="<?= $this->corredor->dni ?>">
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['dni'] ??= null ?>
						</span>
					</div>

					<!-- Categoría -->
					<div class="mb3">
						<label class="form-label">Categoría</label>
						<select class="form-control" name="id_categoria">
							<option value='' selected disabled>Seleccionar Categoría</option>
							<!-- Es una clave ajena, como value se pone el id de la categoría -->
							<?php foreach($this->categorias as $categoria): ?>
								<option value="<?=$categoria->id ?>"
								<?= ($this->corredor->id_categoria == $categoria->id)? 'selected': null ?>
								> <?=$categoria->categoria?> </option>
							<?php endforeach; ?>

						</select>
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['id_categoria'] ??= null ?>
						</span>
					</div>

					<!-- Club -->
					<div class="mb3">
						<label class="form-label">Club</label>
						<select class="form-control" name="id_club">
						<option value='' selected disabled>Seleccionar Club</option>
							<!-- Es una clave ajena, como value se pone el id del club -->
							<?php foreach($this->clubs as $club): ?>
								<option value="<?=$club->id ?>"
								<?= ($this->corredor->id_club == $club->id)? 'selected': null ?>
								> <?=$club->club?> </option>
							<?php endforeach; ?>

						</select>
						<span class="form-text text-danger" role="alert">
							<?= $this->erroresVal['id_club'] ??= null ?>
						</span>
					</div>
			</div>
			<div class="card-footer text-muted">
				<!-- Botones -->
                <a href="<?= URL ?>corredores" class="btn btn-secondary" role="button">Cancelar</a>
					<button type="reset" class="btn btn-dark">Reset</button>
					<button type="submit" class="btn btn-primary">Añadir</button>
            </div>
            </form>
		</div>
    </div>
	<br><br><br>

    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>