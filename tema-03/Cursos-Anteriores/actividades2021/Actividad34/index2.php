<!-- Alumno: Juani Cañamaque -->

<!-- Crear una aplicación PHP basada en la plantilla de bootstrap, que cumpla con los siguientes requisitos:

Definir y asignar valores a la matriz o array bidimensional con índice principal escalar e índice secundario asociativo,
donde el nombre del índice ha de coincidir con el nombre del campo especificado en la lista. Dicha matriz se llamará libros.
Asignar al menos 4 filas al array, teniendo en cuenta que los campos de la tabla libros son:
    id
    titulo
    autor
    genero
    precio
Mostrar en una tabla todos los valores de la matriz libros, dicha tabla deberá mostrar también un encabezado con el nombre
de los campos descritos en la lista anterior.-->


<?php include_once("libros.php") ?>

<!-- Plantilla Básica BootStrapt en local-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--apunta directamente a los archivos de css de bootstrap-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css"> 

    <title>Ejemplo uso Matriz Bidimensional</title>
</head>
<body>
    <div class ="container">

        <header>
            <!-- Componente Jumbotron de web BootStrap-->
            <div class="jumbotron">
                <h1 class="display-3">Actividad 3.4 - TEMA 3 PHP</h1>
                <h5 class="display-6">Gestión Tabla Libros</h5>
                <hr class="my-2">
            </div>
        </header>


        <table class="table">
            <legend> Tabla Libros</legend> 
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Género</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($libros as $libro): ?> 
                    <tr>
                        <td><?=$libro['id']?></td> 
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['autor']?></td>
                        <td><?=$libro['genero']?></td>
                        <td><?=$libro['precio']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>


        <footer>
            <hr>
            <p>&copy; Juani - DWES - 2º DAW - Curso 20/21</p>
        </footer>
        
    </div>

    <!-- Optional JavaScript-->
    <!-- JS, Popper.js, and jQuery -->
    <script src="jquery-3.5.1/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="popper-1.16.1/popper.min.js"></script>
    <script src="bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>