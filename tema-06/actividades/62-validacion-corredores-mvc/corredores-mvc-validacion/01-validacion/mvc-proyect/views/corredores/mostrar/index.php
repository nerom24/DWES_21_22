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
				<legend>Mostrar Ficha Corredor</legend>
			</div>
			<div class="card-body">
                <!-- Formulario -->
				<form >
					<!-- Oculto -->
                    <div class="mb-3" hidden>
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value = "<?= $this->corredor->id ?>" readonly>
                    </div>
                    
                    <!-- Nombre -->
					<div class="mb3">
						<label class="form-label">Nombre</label>
						<input name="nombre" type="text" class="form-control" value = "<?= $this->corredor->nombre ?>" readonly>
					</div>

					<!-- Apellidos -->
					<div class="mb3">
						<label class="form-label">Apellidos</label>
						<input name="apellidos" type="text" class="form-control" value = "<?= $this->corredor->apellidos ?>" readonly>
					</div>

					<!-- Ciudad -->
					<div class="mb3">
						<label class="form-label">Ciudad</label>
						<input name="ciudad" type="text" class="form-control" value = "<?= $this->corredor->ciudad ?>" readonly>
					</div>

					<!-- Sexo -->
					<div class="mb3">
						<label class="form-label">Género</label>
						<input name="ciudad" type="text" class="form-control" value = "<?= $this->corredor->sexo ?>" readonly>
					</div>

					<!-- Fecha Nacimiento -->
					<div class="mb3">
						<label class="form-label">Fecha de Nacimiento</label>
						<input name="fechaNacimiento" type="date" class="form-control" value = "<?= $this->corredor->fechaNacimiento ?>" readonly>
					</div>

					<!-- Edad -->
					<div class="mb3">
						<label class="form-label">Edad</label>
						<input name="edad" type="texto" class="form-control" value = "<?= $this->corredor->edad ?>" readonly>
					</div>

					<!-- Email -->
					<div class="mb3">
						<label class="form-label">Email</label>
						<input name="email" type="email" class="form-control" value = "<?= $this->corredor->email ?>" readonly>
					</div>

					<!-- DNI -->
					<div class="mb3">
						<label class="form-label">DNI</label>
						<input name="dni" type="text" class="form-control" pattern="[0-9]{8}[A-Za-z]{1}" value = "<?= $this->corredor->dni ?>" readonly>
					</div>

					<!-- Categoría -->
					<div class="mb3">
						<label class="form-label">Categoría</label>
						<input type="text" class="form-control" value = "<?= $this->categoria ?>" readonly>
					</div>

					<!-- Club -->
					<div class="mb3">
						<label class="form-label">Club</label>
						<input type="text" class="form-control" value = "<?= $this->club ?>" readonly>
					</div>

					<br>
					<!-- Botones -->
					<a href="<?= URL ?>corredores" class="btn btn-secondary" role="button">Volver</a>
					
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