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

        <legend> Tabla Libros</legend>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Libros <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Título</a>
                    <a class="dropdown-item" href="#">Autor</a>
                    <a class="dropdown-item" href="#">Género</a>
                    <a class="dropdown-item" href="#">Precio</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>


        <table class="table">
             
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Género</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($libros as $key => $libro): ?> 
                    <tr>
                        <td><?=$libro['id']?></td> 
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['autor']?></td>
                        <td><?=$libro['genero']?></td>
                        <td><?=$libro['precio']?></td>

                        <!-- Añado iconos de acción -->
                        <td>
                        <a href="eliminar.php?indice=<?=$key?>"><i class="material-icons">delete</i></a>
                        <a href="editar.php?indice=<?=$key?>"><i class="material-icons">edit</i></a>
                        </td>

                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>


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