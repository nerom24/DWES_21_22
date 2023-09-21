<?php

    /*
    Perfiles:

        CRUD - CREATE READ UPDATE DELETE

        - Admin (CRUD)
        - Editor (CRU)
        - Registrado (CR)
        - Visitante (R)
    */

    

    $perfil ="Visitante";

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>If Alternativo</title>
  </head>
  <body>
    <div class="container">

        <legend><?= $perfil ?></legend>
        
        <?php switch (true): 
            
                case ($perfil == "Admin"): ?>

                <!-- Menú Administrador -->
                <ul class="nav justify-content-center|justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eliminar</a>
                    </li>
                </ul>
                <?php break; ?>
        
        <?php case ($perfil == "Editor"): ?>
                <!-- Menú Editor -->
                <ul class="nav justify-content-center|justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Eliminar</a>
                    </li>
                </ul>
                <?php break; ?>
            <?php case ($perfil == "Registrado"): ?> 
                <!-- Menú Registrado -->
                <ul class="nav justify-content-center|justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Eliminar</a>
                    </li>
                </ul>
                <?php break; ?>
                
            <?php case ($perfil == "Visitante"): ?> 
                <!-- Menú Registrado -->
                <ul class="nav justify-content-center|justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Eliminar</a>
                    </li>
                </ul>
            <?php endswitch; ?>
        <footer>
          <hr>
          <p>&copy; Juan Carlos - DWES - 2º DAW - Curso 21/22</p>
        </footer>

    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>