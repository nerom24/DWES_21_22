
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
				<legend>Tabla Cuentas</legend>
				<?php include "template/cuentas/menuCuentas.php"?>
				
			</div>
			<div class="card-body">
				
                <table class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Cuenta</th>
							<th>Apellidos</th>
							<th>Nombre</th>
							<th>Fecha</th>
							<th>UL Mov</th>
							<th>Nº Mov</th>
							<th>Saldo</th>
							<th>Acciones</th>
						</tr>

					</thead>
					<tbody>
						<?php foreach($this->cuentas as $cuenta): ?>
							<tr>
								<td><?= $cuenta->id?></td>
								<td><?= $cuenta->num_cuenta?></td>
								<td><?= $cuenta->apellidos?></td>
								<td><?= $cuenta->nombre?></td>
								<td><?= $cuenta->fecha_alta?></td>
								<td><?= $cuenta->fecha_ul_mov?></td>
								<td><?= $cuenta->num_movtos?></td>
								<td><?= $cuenta->saldo?></td>
								<td>
								<a href="<?= URL . 'movimientos/cuenta/' . $cuenta->id?>" title="Movimientos"><i class="bi bi-list-ul"></i></a>
								<a href="<?= URL . 'cuentas/eliminar/' . $cuenta->id?>" title="Eliminar" onclick="return confirm('Confirmar la eliminacion de la cuenta')"><i class="bi bi-trash-fill text-danger"></i></a>
								<a href="<?= URL . 'cuentas/editar/' . $cuenta->id?>" title="Editar"><i class="bi bi-pencil-square"></i></a>
								<a href="<?= URL . 'cuentas/mostrar/' . $cuenta->id?>" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>

			</div>
			<div class="card-footer text-muted">
				Nº Registros: <?= $this->cuentas->rowCount();?>
			</div>

		</div>


    </div>
	<br><br><br>
    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>