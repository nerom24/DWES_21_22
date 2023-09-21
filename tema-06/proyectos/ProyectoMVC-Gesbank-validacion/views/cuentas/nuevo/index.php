
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
				<legend>Nueva Cuenta Formulario</legend>	
			</div>
			<div class="card-body">
				<!-- Formulario nuevo cliente -->
				<form method="POST" action="<?= URL?>cuentas/create">
					<div class="mb-3">
						<label class="form-label">Número de Cuenta</label>
						<input type="text" class="form-control" name="num_cuenta">
					</div>
					<div class="mb-3">
						<label for="id_cliente" class="form-label">Clientes</label>
							<select class="form-select" name="id_cliente">
								<?php foreach($this->clientes as $cliente):?>
									<option value=<?= $cliente->id ?>><?=  $cliente->nombre ." " . $cliente->apellidos?></option>
								<?php endforeach;?>
							</select>
					</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Añadir</button>
				<button type="reset" class="btn btn-danger">Borrar</button>
				<a class="btn btn-secondary" href="<?= URL ?>cuentas" role="button">Cancelar</a>
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