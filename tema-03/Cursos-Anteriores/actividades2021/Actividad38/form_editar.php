<!-- Plantilla Básica BootStrapt en local-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--apunta directamente a los archivos de css de bootstrap-->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css"> 

    <!-- Google Materail Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    
    <!-- <i class="material-icons">face</i> -->

    <title>Ejemplo uso Matriz Bidimensional</title>
</head>
<body>
    <div class ="container">

        <header>
            <!-- Componente Jumbotron de web BootStrap-->
            <div class="jumbotron">
                <h1 class="display-3">Actividad 3.8 - TEMA 3 PHP</h1>
                <h5 class="display-6">Gestión Tabla Libros</h5>
                <hr class="my-2">
            </div>
        </header>

        <legend>Editar Libro</legend>

        <!-- Formulario de editar -->
        <form method="POST" action="actualizar.php?indice=<?=$indice?>">
            
            <div class="form-group" hidden>
                <label for="" >Id</label>
                <input type="text" name="id" class="form-control" title="id" value="<?=$id?>" >
            </div>    

            <div class="form-group">
                <label for="">Título</label>
                <input type="text" name="titulo" class="form-control" title="Título" value="<?=$titulo?>">
            </div>

            <div class="form-group">
                <label for="">Autor</label>
                <input type="text" name="autor"  class="form-control" title="Autor" value="<?=$autor?>">
            </div>

            <div class="form-group">
                <label for="">Género</label>
                <input type="text" name="genero"  class="form-control"  title="Género" value="<?=$genero?>">
            </div>

            <div class="form-group">
                <label for="">Precio</label>
                <input type="number" step="any" name="precio"  class="form-control" title="Precio" value="<?=$precio?>">
            </div>

            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="submit" class="btn btn-primary" >Actualizar</button>
            
        </form>

        <footer>
            <hr>
            <p>&copy; Juan Carlos - DWES - 2º DAW - Curso 20/21</p>
        </footer>
        
    </div>

    <!-- Optional JavaScript-->
    <!-- JS, Popper.js, and jQuery -->
    <script src="jquery-3.5.1/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="popper-1.16.1/popper.min.js"></script>
    <script src="bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>