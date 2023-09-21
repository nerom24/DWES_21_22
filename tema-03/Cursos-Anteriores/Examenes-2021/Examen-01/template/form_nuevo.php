<!DOCTYPE html>
<html lang="es">

<?php require_once("template/partials/head.php"); ?>

<body>
    <div class ="container">
        <?php require_once("template/partials/cabecera.php"); ?>

        <legend>Nueva Película</legend>

        <form method= "POST" action="nuevo.php">
            <!-- Campo ID Oculto-->
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input name = "id" type="text" class="form-control">
            </div>

            <!-- Campo título -->
            <div class="form-group">
                <label for="exampleInputDescripcion">Título</label>
                <input name = "titulo" type="text" class="form-control" required>
            </div>
            
            <!-- Campo director -->
            <div class="form-group">
                <label for="exampleInputModelo">Director</label>
                <input name = "director" type="text" class="form-control" required>
            </div>

            <!-- Campo nacionalidad -->
            <div class="form-group">
                <label for="exampleInputModelo">Nacionalidad</label>
                <input name = "nacionalidad" type="text" class="form-control" required>
            </div>

            <!-- Campo Géneros -->
            <div class="form-group">
                <label for="">Géneros</label>
                <div  class="form-control">
                    <?php foreach ($generos as $genero):?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="generos[]" value="<?=$genero?>">
                            <label class="form-check-label" for="inlineCheckbox1"><?=$genero ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Campo Año -->
            <div class="form-group">
                <label for="exampleInputUnidades">Año</label>
                <input name = "año" type="number" class="form-control" required>
            </div>

            <!-- Botones de Acción -->
            <a class="btn btn-secondary" href="index.php">Cancelar</a>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>

        <?php require_once("template/partials/footer.php"); ?>
        
    </div>

    <?php require_once("template/partials/javascript.php"); ?>      

</body>
</html>