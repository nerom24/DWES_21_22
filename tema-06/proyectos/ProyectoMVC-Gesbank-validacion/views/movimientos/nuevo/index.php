
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
				<legend>Nuevo Movimiento Formulario</legend>	
				
			</div>
			<div class="card-body">
				<!-- Formulario nuevo cliente -->
				<form method="POST" action="<?= URL?>movimientos/create/<?= $this->cuentas->id ?>">
					<div class="mb-3">
					<label for="num_cuenta" class="form-label">Cuenta</label>
                        <input type="text" name="cuenta" class="form-control" id="num_cuenta" value="<?= $this->cuentas->num_cuenta ?>" disabled>
					</div>
					<div class="mb-3">
						<label for="id_cliente" class="form-label">Cliente</label>
                        <input type="text" name="cuenta" class="form-control" id="id_cliente" value="<?= $this->cuentas->cliente ?>" disabled>
					</div>
					<div class="mb-3">
					<label for="saldo" class="form-label">Saldo</label>
                        <input type="text" name="cuenta" class="form-control" id="saldo" value="<?= $this->cuentas->saldo ?>" disabled>
					</div>
                    <div class="mb-3">
                        <label for="concepto" class="form-label">Concepto</label>
                        <input type="text" name="concepto" class="form-control" id="concepto" required>
                    </div>
					<label class="form-label">Tipo</label>
					<div class="mb-3 form-control">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio"  id="inlineRadio1" value="I" name="tipo" checked>
							<label class="form-check-label" for="inlineRadio1">Ingreso</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="inlineRadio2" value="R" name="tipo">
							<label class="form-check-label" for="inlineRadio2">Reintegro</label>
						</div>
					</div>
					<!-- Cantidad -->
					<div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" min="0.00" step="0.01" value="0.00" class="form-control" id="inputCantidad" required>
                    </div>
					
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Añadir</button>
				<button type="reset" class="btn btn-danger">Borrar</button>
				<a class="btn btn-secondary" href="<?= URL ?>movimientos/cuenta/<?= $this->id ?>">Cancelar</a>
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