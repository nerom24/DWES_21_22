<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">

        <legend>Contenido del Archivo</legend>

		<table class="table">

		<tr><th>datospresonales.txt</th></tr>

		<?php foreach ($file as $campo): ?>

			<tr><td><?= $campo; ?></td></tr>
		
		<?php endforeach; ?>

		</table>
        

    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>
