<!DOCTYPE html>
<html lang="es">

<?php require_once("template/partials/head.php"); ?>

<body>
    <div class ="container">

        <?php require_once("template/partials/cabecera.php"); ?>

        <legend>Editar Artículo</legend> 

        <form >
            <!-- Campo ID -->
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input type="text" class="form-control" >
            </div>  
            
            <!-- Campo Título -->  
            <div class="form-group">
                <label for="exampleInputDescripcion">Título</label>
                <input type="text" class="form-control" >
            </div>
            
            <!-- Campo Director -->
            <div class="form-group">
                <label for="exampleInputModelo">Director</label>
                <input  type="text" class="form-control" >
            </div>

            <!-- Campo Nacionalidad -->
            <div class="form-group">
                <label for="exampleInputModelo">Nacionalidad</label>
                <input  type="text" class="form-control" >
            </div>
            
            <!-- Campo Géneros -->
            <div class="form-group">
                <label for="">Géneros</label>
                <div  class="form-control">   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="inlineCheckbox1">etiqueta</label>
                        </div>
                </div>
            </div>
            
            <!-- Campo Precio -->
            <div class="form-group">
                <label for="exampleInputPrecio">Año</label>
                <input  type="number" class="form-control" >
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