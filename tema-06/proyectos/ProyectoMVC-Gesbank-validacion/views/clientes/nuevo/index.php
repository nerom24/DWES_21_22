
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
				<legend>Vista Nuevo Formulario</legend>	
			</div>
			<div class="card-body">
				<!-- Formulario nuevo cliente -->
				<form method="POST" action="<?= URL?>clientes/create">
					<div class="mb-3">
						<label class="form-label">Nombre</label>
						<input type="text" class="form-control" name="nombre">
					</div>
					<div class="mb-3">
						<label class="form-label">Apellidos</label>
						<input type="text" class="form-control" name="apellidos">
					</div>
					<div class="mb-3">
						<label class="form-label">Telefono</label>
						<input type="text" class="form-control" name="telefono">
					</div>
					<div class="mb-3">
						<label class="form-label">Ciudad</label>
						<input type="text" class="form-control" name="ciudad">
					</div>
					<div class="mb-3">
						<label class="form-label">DNI</label>
						<input type="text" class="form-control" name="dni" pattern="^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}$">
					</div>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" name="email">
					</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Añadir</button>
				<button type="reset" class="btn btn-danger">Borrar</button>
				<a class="btn btn-secondary" href="<?= URL ?>clientes" role="button">Cancelar</a>
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