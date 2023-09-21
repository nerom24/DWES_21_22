<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    <!-- Page Content -->
    <div class="container">

    <?php require_once("template/partials/mensaje.php") ?>
        
        <legend>Formulario</legend>

		<form action="procesar.php" method="POST">
       
        <div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="nombre" class="form-control" required="required" title="Nombre " autofocus>
		</div>

		<div class="form-group">
			<label for="">Apellidos</label>
			<input type="text" name="apellidos" class="form-control" required="required" title="Apellidos ">
		</div>

		<div class="form-group">
			<label for="">Dirección</label>
			<input type="text" name="direccion" class="form-control" required="required" title="Dirección ">
		</div>

		<div class="form-group">
			<label for="">Código Postal</label>
			<input type="text" name="cpostal" class="form-control" required="required" title="Código Postal ">
		</div>
		
		<div class="form-group">
			<label for="">Población</label>
			<input type="text" name="poblacion" class="form-control" required="required" title="Población ">
		</div>
		
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="email" class="form-control" required="required" title="Email" placeholder="info@email.com">
		</div>

		<div class="form-group">
			<label for="">Teléfono</label>
			<input type="tel" name="telefono" class="form-control" required="required" title="Teléfono">
		</div>

		<button type="reset" class="btn btn-secundary">Limpiar</button>
		<button type="submit" class="btn btn-primary">Enviar</button>

		</form>
       
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>
</html>
