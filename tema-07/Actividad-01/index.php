<?php

/*
		Tema : 07 - Archivos PHP
		Curso: 2DAW - 19/20
		Descripción: Archivos con texto planto datospersonales.txt
		Autor: Juan Carlos
		Fecha: 22/1/2020
*/
	
	session_start();

	if (isset($_SESSION['mensaje'])) {

		$mensaje = $_SESSION['mensaje'];
		unset($_SESSION['mensaje']);
		
	}

	$archivo = basename($_SERVER['PHP_SELF']);
	
?> 

<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">

        <?php require_once("template/partials/mensaje.php") ?>
		<?= basename($_SERVER['PHP_SELF']) ?>

    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>


