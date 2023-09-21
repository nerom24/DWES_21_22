
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
			<legend>Movimientos de la cuenta: <?= $this->cuentas->id?></legend>
				<legend>Tabla Movimientos</legend>
				<?php include "template/movimientos/menuMovimientos.php"?>
				
			</div>
			<div class="card-body">
				
                <table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Id Mov</th>
							<th>Cuenta</th>
							<th>Fecha</th>
							<th>Concepto</th>
							<th>Tipo</th>
							<th>Cantidad</th>
							<th>Saldo</th>
						</tr>

					</thead>
					<tbody>
						<?php foreach($this->movimientos->fetchAll() as $movimiento): ?>
							<tr>
								<td><?= ++$this->contador ?></td>
								<td><?= $movimiento->id?></td>
								<td><?= $movimiento->num_cuenta?></td>
								<td><?= $movimiento->fecha_hora?></td>
								<td><?= $movimiento->concepto?></td>
								<td><?= $movimiento->tipo?></td>
								<td><?= $movimiento->cantidad?></td>
								<td><?= $movimiento->saldo?></td>
								
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>

			</div>
			<div class="card-footer text-muted">
				Nº Registros: <?= $this->movimientos->rowCount();?>
			</div>

		</div>


    </div>
	<br><br><br>
    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>