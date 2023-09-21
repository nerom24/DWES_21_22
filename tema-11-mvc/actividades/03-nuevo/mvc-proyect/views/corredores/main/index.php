
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
				<legend>Tabla Corredores</legend>
				<?php require_once("template/corredores/menuCorredores.php") ?>
			</div>
			<div class="card-body">
				
				<!-- Tabla corredores -->
				<table class="table table-hover">
					<thead class="">
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
									<a href="delete.php?id=<?= $corredor->id ?>" title="Eliminar"><i class="material-icons">delete</i></a>
									<a href="editar.php?id=<?= $corredor->id ?>" title="Editar"><i class="material-icons">edit</i></a>
									<a href="mostrar.php?id=<?= $corredor->id ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
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
		<br><br><br>


    </div>

    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>