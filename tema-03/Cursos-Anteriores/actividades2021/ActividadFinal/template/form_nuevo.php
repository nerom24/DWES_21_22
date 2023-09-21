<!-- Plantilla Básica BootStrapt en local-->
<!DOCTYPE html>
<html lang="es">
<!-- head -->
<?php include_once("template/partials/head.php")?>
<!-- Fin head -->
<body>
    <div class ="container">

        <!-- cabecera -->
        <?php include_once("template/partials/cabecera.php");?>

        <legend>Formulario Nuevo Libro</legend>

        <!-- Formulario de editar -->
        <form method="POST" action="nuevo.php">
            
            <div class="form-group">
                <label for="" >Id</label>
                <input type="text" name="id" class="form-control" title="id" require>
            </div>    

            <div class="form-group">
                <label for="">Título</label>
                <input type="text" name="titulo" class="form-control" title="Título" require >
            </div>

            <div class="form-group">
                <label for="">Autor</label>
                <input type="text" name="autor"  class="form-control" title="Autor" require>
            </div>

            <div class="form-group">
                <label for="">Género</label>
                <input type="text" name="genero"  class="form-control"  title="Género" require>
            </div>

            <div class="form-group">
                <label for="">Precio</label>
                <input type="number" step="any" name="precio"  class="form-control" title="Precio"require >
            </div>

            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-primary" >Borrar</button>
            <button type="submit" class="btn btn-primary" >Añadir</button>
            
        </form>

        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
        
    </div>

    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>

</body>
</html>