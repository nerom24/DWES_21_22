<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menuAut.php") ?>
    
    <!-- Page Content -->
    <div class="container">
	<br>

		<?php require_once("template/partials/mensaje.php") ?>
		

		<!-- Estilo card de bootstrap -->
		<div class="card">
			<div class="card-header">
				<legend>Tabla Corredores</legend>
				<?php require_once("template/corredores/menuCorredores.php") ?>
			</div>
			<div class="card-body">
				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Ciudad</th>
							<th>Email</th>
							<th>Edad</th>
							<th>Categoría</th>
							<th>Club</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($this->corredores as $corredor): ?>
							<tr>
								<td><?= $corredor->id ?></td>
								<td><?= $corredor->nombre ?></td>
								<td><?= $corredor->apellidos ?></td>
								<td><?= $corredor->ciudad ?></td>
								<td><?= $corredor->email ?></td>
								<td><?= $corredor->edad ?></td>
								<td><?= $corredor->categoria ?></td>
								<td><?= $corredor->club ?></td>

								<td>
									
									<a href="<?= URL ?>corredores/editar/<?= $corredor->id?>" title="Editar" 
									<?= (!in_array($_SESSION['id_rol'], $GLOBALS['editar'])) ? 'class = "btn disabled"': null?>
									><i class="bi bi-pencil-square"></i></a>
									<a href="<?= URL ?>corredores/mostrar/<?= $corredor->id?>" title="Mostrar"
									<?= (!in_array($_SESSION['id_rol'], $GLOBALS['consultar'])) ? 'class = "btn disabled"': null?>
									><i class="bi bi-eye"></i></a>
									<a href="<?= URL ?>corredores/eliminar/<?= $corredor->id?>" title="Eliminar" onclick="return confirm('Confimar elimación del corredor')"
									<?= (!in_array($_SESSION['id_rol'], $GLOBALS['eliminar'])) ? 'class = "btn disabled"': null?>
									><i class="bi bi-trash"></i></a>

								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="card-footer text-muted">
				Nº Registros: <?= $this->corredores->rowCount(); ?> 
            </div>
		</div>
    </div>
	<br><br><br>

    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>