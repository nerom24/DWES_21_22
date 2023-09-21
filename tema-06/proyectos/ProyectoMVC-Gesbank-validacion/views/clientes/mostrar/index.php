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
				<legend>Vista Mostrar Cliente</legend>	
			</div>
			<div class="card-body">
				<!-- Formulario nuevo cliente -->
				<form>
					<!-- ID oculto -->
                    <input type="hidden" name="id" value="<?= $this->cliente->id ?>">
					<!-- Nombre -->
					<div class="mb-3">
						<label class="form-label">Nombre</label>
						<input type="text" class="form-control" name="nombre" value="<?= $this->cliente->nombre ?>" readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">Apellidos</label>
						<input type="text" class="form-control" name="apellidos" value="<?= $this->cliente->apellidos ?>" readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">Telefono</label>
						<input type="text" class="form-control" name="telefono" value="<?= $this->cliente->telefono ?>" required readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">Ciudad</label>
						<input type="text" class="form-control" name="ciudad" value="<?= $this->cliente->ciudad ?>" readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" name="email" value="<?= $this->cliente->email ?>" required readonly>
					</div>
					<div class="mb-3">
						<label class="form-label">DNI</label>
						<input type="text" class="form-control" name="dni" pattern="^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}$" value="<?= $this->cliente->dni ?>" required readonly>
					</div>
			</div>
			<div class="card-footer text-muted">
				<a class="btn btn-secondary" href="<?= URL ?>clientes" role="button">Volver</a>
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