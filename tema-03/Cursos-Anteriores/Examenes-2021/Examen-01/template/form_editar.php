<!DOCTYPE html>
<html lang="es">

<?php require_once("template/partials/head.php"); ?>

<body>
    <div class ="container">

        <?php require_once("template/partials/cabecera.php"); ?>

        <legend>Editar Artículo</legend> 

        <form method= "POST" action="actualizar.php?indice=<?=$key?>">
            <!-- Campo ID -->
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input name = "id" type="text" class="form-control" value="<?=$id?>">
            </div>  
            
            <!-- Campo Título -->  
            <div class="form-group">
                <label for="exampleInputDescripcion">Título</label>
                <input name = "titulo" type="text" class="form-control" value="<?=$titulo?>">
            </div>
            
            <!-- Campo Director -->
            <div class="form-group">
                <label for="exampleInputModelo">Director</label>
                <input name = "director" type="text" class="form-control" value="<?=$director?>">
            </div>

            <!-- Campo Nacionalidad -->
            <div class="form-group">
                <label for="exampleInputModelo">Nacionalidad</label>
                <input name = "nacionalidad" type="text" class="form-control" value="<?=$nacionalidad?>">
            </div>
            
            <!-- Campo Géneros -->
            <div class="form-group">
                <label for="">Géneros</label>
                <div  class="form-control">
                    <?php foreach ($generos as $genero):?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="generos[]" value="<?=$genero?>" 
                            <?= (in_array($genero, $generos_registro)) ? "checked":null ?>>
                            <label class="form-check-label" for="inlineCheckbox1"><?=$genero ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Campo Precio -->
            <div class="form-group">
                <label for="exampleInputPrecio">Año</label>
                <input name = "año" type="number" class="form-control" value="<?=$año?>">
            </div>
            
            <!-- Botones de Acción -->
            <a class="btn btn-secondary" href="index.php">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            
        </form>

        <?php require_once("template/partials/footer.php"); ?>
        
    </div>

    <?php require_once("template/partials/javascript.php"); ?>

</body>
</html>