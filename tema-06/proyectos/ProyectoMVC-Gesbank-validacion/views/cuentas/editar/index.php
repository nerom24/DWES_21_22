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
				<legend>Editar Cuenta Formulario</legend>	
			</div>
			<div class="card-body">
				<!-- Formulario nuevo cliente -->
				<form method="POST" action="<?= URL ?>cuentas/update/<?= $this->cuentas->id ?>">
					<!-- ID oculto -->
                    <input type="hidden" name="id" value="<?= $this->cuentas->id ?>">
					<!-- Numero de cuenta -->
					<div class="mb-3">
						<label class="form-label">Número de Cuenta</label>
						<input type="text" class="form-control" name="num_cuenta" value="<?= $this->cuentas->num_cuenta ?>">
					</div>
					<!-- Clientes -->
					<div class="mb-3">
						<label for="id_cliente" class="form-label">Clientes</label>
							<select class="form-select" name="id_cliente">
								<?php foreach($this->clientes as $cliente):?>
									<option value="<?= $cliente->id  ?>" <?= ($this->cuentas->id_cliente == $cliente->id) ? 'selected' : null ?>>
                                    <?= $cliente->nombre ." " . $cliente->apellidos ?>
                                </option>
								<?php endforeach;?>
							</select>
					</div>
					<!-- Numero Movimientos -->
					<div class="mb-3">
						<label class="form-label">Numero Movimientos</label>
						<input type="text" class="form-control" name="num_movtos" value="<?= $this->cuentas->num_movtos ?>" readonly>
					</div>
					<!-- Saldo -->
					<div class="mb-3">
						<label class="form-label">Saldo</label>
						<input type="text" class="form-control" name="saldo" value="<?= $this->cuentas->saldo ?>" readonly>
					</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Actualizar</button>
				<button type="reset" class="btn btn-danger">Reset</button>
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