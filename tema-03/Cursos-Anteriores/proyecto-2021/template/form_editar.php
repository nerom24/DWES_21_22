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
            
            <!-- Campo Descripcion -->  
            <div class="form-group">
                <label for="exampleInputDescripcion">Descripción</label>
                <input name = "descripcion" type="text" class="form-control" value="<?=$descripcion?>">
            </div>
            
            <!-- Campo Modelo -->
            <div class="form-group">
                <label for="exampleInputModelo">Modelo</label>
                <input name = "modelo" type="text" class="form-control" value="<?=$modelo?>">
            </div>
            
            <!-- Campo Categoría -->
            <div class="form-group">
                <label for="exampleInputCategoria">Categoría</label>
                <select class="custom-select" name="categoria">
                    <?php foreach($categorias as $key =>$cat):?>
                        <option <?= ($categoria == $cat) ? "selected":null ?> value="<?=$key?>"><?=$cat?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Campo Unidades -->
            <div class="form-group">
                <label for="exampleInputUnidades">Unidades</label>
                <input name = "unidades" type="text" class="form-control" value="<?=$unidades?>">
            </div>
            
            <!-- Campo Precio -->
            <div class="form-group">
                <label for="exampleInputPrecio">Precio</label>
                <input name = "precio" type="number" class="form-control" placeholder= 0 step="0.1" value="<?=$precio?>">
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