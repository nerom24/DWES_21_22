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
				<legend>Formulario Editar Corredor</legend>
			</div>
			<div class="card-body">
                <!-- Formulario -->
				<form method="POST" action="<?= URL ?>corredores/update/<?= $this->id ?>">
					<!-- Oculto -->
                    <div class="mb-3" hidden>
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value = "<?= $this->corredor->id ?>">
                    </div>
                    
                    <!-- Nombre -->
					<div class="mb3">
						<label class="form-label">Nombre</label>
						<input name="nombre" type="text" class="form-control" value = "<?= $this->corredor->nombre ?>">
					</div>

					<!-- Apellidos -->
					<div class="mb3">
						<label class="form-label">Apellidos</label>
						<input name="apellidos" type="text" class="form-control" value = "<?= $this->corredor->apellidos ?>">
					</div>

					<!-- Ciudad -->
					<div class="mb3">
						<label class="form-label">Ciudad</label>
						<input name="ciudad" type="text" class="form-control" value = "<?= $this->corredor->ciudad ?>">
					</div>

					<!-- Sexo -->
					<div class="mb3">
						<label class="form-label">Sexo</label>
						<div class="form-control"> 
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="H"
                                 <?= ($this->corredor->sexo == 'H')?'checked': null ?>
                                >
								<label class="form-check-label" for="inlineRadio1">Hombre</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="M" 
                                    <?= ($this->corredor->sexo == 'M')?'checked': null ?>
                                >
								<label class="form-check-label" for="inlineRadio2">Mujer</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" value="S" 
                                <?= ($this->corredor->sexo == '')?'checked': null ?>
                                >
								<label class="form-check-label" for="inlineRadio3">Sin Especificar </label>
							</div>
						</div>
					</div>

					<!-- Fecha Nacimiento -->
					<div class="mb3">
						<label class="form-label">Fecha de Nacimiento</label>
						<input name="fechaNacimiento" type="date" class="form-control" value = "<?= $this->corredor->fechaNacimiento ?>">
					</div>

					<!-- Email -->
					<div class="mb3">
						<label class="form-label">Email</label>
						<input name="email" type="email" class="form-control" value = "<?= $this->corredor->email ?>">
					</div>

					<!-- DNI -->
					<div class="mb3">
						<label class="form-label">DNI</label>
						<input name="dni" type="text" class="form-control" pattern="[0-9]{8}[A-Za-z]{1}" value = "<?= $this->corredor->dni ?>">
					</div>

					<!-- Categoría -->
					<div class="mb3">
						<label class="form-label">Categoría</label>
						<select class="form-control" name="id_categoria">
							<!-- Es una clave ajena, como value se pone el id de la categoría -->
							<?php foreach($this->categorias as $categoria): ?>
								<option value="<?=$categoria->id ?>" 
                                    <?= ($this->corredor->id_categoria == $categoria->id)?'selected' : null ?>
                                > <?=$categoria->categoria?> </option>
							<?php endforeach; ?>

						</select>
					</div>

					<!-- Club -->
					<div class="mb3">
						<label class="form-label">Club</label>
						<select class="form-control" name="id_club">
							<!-- Es una clave ajena, como value se pone el id del club -->
							<?php foreach($this->clubs as $club): ?>
								<option value="<?=$club->id ?>"
                                    <?= ($this->corredor->id_club == $club->id)? 'selected' : null ?>
                                > <?=$club->club?> </option>
							<?php endforeach; ?>

						</select>
					</div>

					<br>
					<!-- Botones -->
					<a href="<?= URL ?>corredores" class="btn btn-secondary" role="button">Cancelar</a>
					<button type="reset" class="btn btn-dark">Reset</button>
					<button type="submit" class="btn btn-primary">Actualizar</button>
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