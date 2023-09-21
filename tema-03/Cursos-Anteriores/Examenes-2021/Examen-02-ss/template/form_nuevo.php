<!DOCTYPE html>
<html lang="es">

<?php require_once("template/partials/head.php"); ?>

<body>
    <div class ="container">
        <?php require_once("template/partials/cabecera.php"); ?>

        <legend>Nueva Película</legend>

        <form method= "POST" action="#">
            <!-- Campo ID Oculto-->
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input type="text" class="form-control">
            </div>

            <!-- Campo título -->
            
            
            <!-- Campo director -->
            

            <!-- Campo nacionalidad -->
           

             <!-- Campo estreno -->
            

            <!-- Campo plataforma -->
            

            <!-- Campo temporadas -->
            

            <!-- Campo Géneros -->
            <div class="form-group">
                <label for="">Géneros</label>
                <div  class="form-control">
                    
                </div>
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