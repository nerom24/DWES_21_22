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

        <form action="acceso.php" method="POST">
            <div class="form-group">
                <label>Nombre Usuario</label>
                <input type="text" name="nombre" class="form-control" aria-describedby="nombreHelp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Perfil de Acceso</label>
                <select class="form-control" name="perfil">
                    <option></option>
                    <option>Administrador</option>
                    <option>Editor</option>
                    <option>Usuario</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="reset" class="btn btn-secondary">Borrar</button>
            <button type="submit" class="btn btn-primary">Acceso</button>
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