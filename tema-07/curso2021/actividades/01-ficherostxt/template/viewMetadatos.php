<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">

        <legend>Metadatos</legend>

		<table class="table">

		<thead>
			<tr>
				<th scope="col" colspan="2"><?= $fichero ?></th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<th>Tamaño</th>
				<td><?=filesize($fichero) ?> bytes </td>
			</tr>

			<tr>
				<th>Último acceso</th>
				<td><?=  fileatime($fichero)  ?> </td>
			</tr>

			<tr>
				<th>Último modificación</th>
				<td><?=filemtime($fichero) ?> </td>
			</tr>

			<tr>
				<th>Tipo archivo</th>
				<td><?=filetype($fichero) ?> </td>
			</tr>
					  
		</tbody>
		</table>
        

    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>