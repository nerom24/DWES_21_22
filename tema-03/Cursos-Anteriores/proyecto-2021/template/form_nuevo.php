<!DOCTYPE html>
<html lang="es">

<?php require_once("template/partials/head.php"); ?>

<body>
    <div class ="container">
        <?php require_once("template/partials/cabecera.php"); ?>

        <legend>Crear Artículo</legend>

        <form method= "POST" action="nuevo.php">
            <!-- Campo ID Oculto-->
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input name = "id" type="text" class="form-control">
            </div>

            <!-- Campo Descripción -->
            <div class="form-group">
                <label for="exampleInputDescripcion">Descripción</label>
                <input name = "descripcion" type="text" class="form-control" required>
            </div>
            
            <!-- Campo Modelo -->
            <div class="form-group">
                <label for="exampleInputModelo">Modelo</label>
                <input name = "modelo" type="text" class="form-control" required>
            </div>

            <!-- Campo Categoría -->
            <div class="form-group">
                <label for="exampleInputCategoria">Categoría</label>
                <select class="custom-select" name="categoria">
                    <?php foreach($categorias as $categoria):?>
                        <option value="<?=$categoria?>"><?=$categoria?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo Unidades -->
            <div class="form-group">
                <label for="exampleInputUnidades">Unidades</label>
                <input name = "unidades" type="text" class="form-control">
            </div>

            <!-- Campo Stock -->
            <div class="form-group">
                <label for="exampleInputPrecio">Precio</label>
                <input name = "precio" type="number" class="form-control" placeholder= 0 step="0.1">
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