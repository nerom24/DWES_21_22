<!-- Plantilla Básica Bootstrap en Local -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">

    <title>Actividad 3.1</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="jumbotron">
                <h1 class="display-3">Actividad 3.2.2</h1>
                <hr class="my-2">
                <h2 class="display-6">Tema 3 DWES 20/21</h2>
            </div>
        </header>

        <?php 
            $nuevo = 'disabled';
            $editar = 'disabled';
            $eliminar = 'disabled';
            $consultar = 'disabled';
            
            switch ($perfil) {
                case 'Administrador':
                    $nuevo = '';
                    $editar = '';
                    $eliminar = '';
                    $consultar = '';
                    break;
                case 'Editor':
                    $nuevo = '';
                    $editar = '';
                    $consultar = '';
                    break;
                case 'Usuario':
                    $consultar = '';
                    break;
                default:
                    header('Location: index.php');
            }

        ?>

        <nav>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active <?=$nuevo ?>" href="#">Nuevo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=$eliminar ?>" href="#">Eliminar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=$editar ?>" href="#">Editar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=$consultar ?>" href="#" tabindex="-1" aria-disabled="true">Consultar</a>
                </li>
            </ul>
        
        </nav>

        <form>
            <div class="form-group">
                <label>Nombre Usuario</label>
                <input type="text" class="form-control" value="<?= $nombre ?>" disabled>
            </div>
            <div class="form-group">
                <label>Perfil</label>
                <input type="text" class="form-control" value="<?= $perfil ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" value="<?= $email ?>" disabled>
            </div>
            <a class="btn btn-primary" href="index.php" role="button">Salir</a>
        </form>

        <footer>
            <hr>
            <p>&copy; Juan Carlos - DWES - 2º DAW - Curso 20/21</p>
        </footer>

    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.5.1/jquery-3.5.1.slim.min.js"></script>
    <script src="popper-1.16.1/popper.min.js"></script>
    <script src="bootstrap-4.5.2-dist/js/bootstrap.min.js" ></script>
</body>
</html>