<?php
    # Iniciamos la sesión o recuperamos la anterior sesión existente
    session_start();
    
    # Destruimos la sesión
    session_destroy();

    if (isset($_COOKIE['sesiones_iniciadas'])) {
        
        $num_sesiones = $_COOKIE['sesiones_iniciadas'];
        $num_sesiones++;

    } else {

        $num_sesiones = 1;
    }

    setcookie('sesiones_iniciadas', $num_sesiones, time() + 3600*24*365);

    # Eliminamos las variables de sesión
    session_unset();
    $_SESSION = array();
 
?>

<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
  
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
        
        <legend>Cerrar Sesión</legend>
        
        <table class="table">
            <thead class="">
                <tr>
                    <th>Cookies</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sesiones Iniciadas</td>
                    <td><?= $_COOKIE['sesiones_iniciadas'] ?></td>
                </tr>
                <tr>
                    <td>Nombre de la Sesión</td>
                    <td><?= session_name() ?></td>
                </tr>
                <tr>
                    <td>Páginas Visitadas</td>
                    <td><?= $_COOKIE['contador_visitas'] ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Inicio última sesión</td>
                    <td><?= $_COOKIE['inicio_ultima_visita'] ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Fin última sesión</td>
                    <td><?= $_COOKIE['fin_ultima_visita'] ?></td>
                </tr>
                <tr>
                    <td>Estadística de Páginas Visitadas</td>
                    <td><?= json_encode($_COOKIE['paginas_visitadas']) ?></td>
                </tr>
            </tbody>
            
        </table>
        <br>
        <a href="index.php" class="badge badge-primary">Volver a visitar</a>
        
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>