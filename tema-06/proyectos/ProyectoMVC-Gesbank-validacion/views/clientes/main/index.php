
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
				<legend>Tabla Clientes</legend>
				<?php include "template/clientes/menuClientes.php"?>
				
			</div>
			<div class="card-body">
				
                <table class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Apellidos</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Ciudad</th>
							<th>DNI</th>
							<th>Email</th>
							<th>Acciones</th>
						</tr>

					</thead>
					<tbody>
						<?php foreach($this->clientes as $cliente): ?>
							<tr>
								<td><?= $cliente->id?></td>
								<td><?= $cliente->apellidos?></td>
								<td><?= $cliente->nombre?></td>
								<td><?= $cliente->telefono?></td>
								<td><?= $cliente->ciudad?></td>
								<td><?= $cliente->dni?></td>
								<td><?= $cliente->email?></td>
								<td>
								<a href="<?= URL . 'clientes/eliminar/' . $cliente->id?>" title="Eliminar" onclick="return confirm('Confirmar la eliminacion del cliente')"><i class="bi bi-trash-fill text-danger"></i></a>
								<a href="<?= URL . 'clientes/editar/' . $cliente->id?>" title="Editar"><i class="bi bi-pencil-square"></i></a>
								<a href="<?= URL . 'clientes/mostrar/' . $cliente->id?>" title="Mostrar"><i class="bi bi-eye-fill"></i></a>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>

			</div>
			<div class="card-footer text-muted">
				Nº Registros: <?= $this->clientes->rowCount();?>
			</div>

		</div>


    </div>
	<br><br><br>
    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>