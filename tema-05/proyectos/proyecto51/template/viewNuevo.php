<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>

<body>
    <!-- cabecera -->
    <?php include_once("template/partials/cabecera.php");?>

    <div class ="container">
        <?php include_once ("template/partials/notify.php") ?>

        <!-- Formulario -->
        <legend>Nuevo Corredor</legend>
        <form method="POST" action="create.php">
            <!-- Nombre -->
            <div class="form-group">
                <label for="">Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>

            <!-- Apellidos -->
            <div class="form-group">
                <label for="">Apellidos</label>
                <input name="apellidos" type="text" class="form-control">
            </div>

            <!-- Ciudad -->
            <div class="form-group">
                <label for="">Ciudad</label>
                <input name="ciudad" type="text" class="form-control">
            </div>

             <!-- Sexo -->
             <div class="form-group">
                <label for="">Sexo</label>
                <div class="form-control"> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="H" checked>
                        <label class="form-check-label" for="inlineRadio1">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="M">
                        <label class="form-check-label" for="inlineRadio2">Mujer</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="S" >
                        <label class="form-check-label" for="inlineRadio3">Sin Especificar </label>
                    </div>
                </div>
            </div>

            <!-- Fecha Nacimiento -->
            <div class="form-group">
                <label for="">Fecha de Nacimiento</label>
                <input name="fechaNacimiento" type="date" class="form-control">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="email" class="form-control">
            </div>

            <!-- DNI -->
            <div class="form-group">
                <label for="">DNI</label>
                <input name="dni" type="text" class="form-control" pattern="[0-9]{8}[A-Za-z]{1}">
            </div>

            <!-- Categoría -->
            <div class="form-group">
                <label for="">Categoría</label>
                <select class="form-control" name="id_categoria">
                    <!-- Es una clave ajena, como value se pone el id de la categoría -->
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?=$categoria->id ?>"> <?=$categoria->categoria?> </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <!-- Club -->
            <div class="form-group">
                <label for="">Club</label>
                <select class="form-control" name="id_club">
                    <!-- Es una clave ajena, como value se pone el id del club -->
                    <?php foreach($clubs as $club): ?>
                        <option value="<?=$club->id ?>"> <?=$club->club?> </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <br>
            <!-- Botones -->
            <a href="index.php" class="btn btn-secondary" role="button">Cancelar</a>
            <button type="reset" class="btn btn-dark">Reset</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
        <!-- Fin de formulario -->


        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>