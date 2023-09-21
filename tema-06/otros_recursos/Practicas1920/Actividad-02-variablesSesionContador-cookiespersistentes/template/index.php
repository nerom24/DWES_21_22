<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
        
        <legend><?= $archivo_actual ?></legend>
        
        <table class="table">
            <thead class="">
                <tr>
                    <th>Información</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SID sesión</td>
                    <td><?= session_id() ?></td>
                </tr>
                <tr>
                    <td>Nombre de la Sesión</td>
                    <td><?= session_name() ?></td>
                </tr>
                <tr>
                    <td>Número de sesiones iniciadas</td>
                    <td><?= isset($_COOKIE['sesiones_iniciadas'])?$_COOKIE['sesiones_iniciadas']:null ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Inicio Sesión</td>
                    <td><?= $_SESSION['fecha_hora_inicio_sesion'] ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora última Visita</td>
                    <td><?= $_SESSION['fecha_hora_acceso_pagina'] ?></td>
                </tr>
                <tr>
                    <td>Número de visita a la Página</td>
                    <td><?= $_SESSION['contador_paginas']?></td>
                </tr>
                <tr>
                    <td>Número de visitas a <?= $archivo_actual ?></td>
                    <td><?= $_SESSION['paginas_visitadas'][$archivo_actual]?></td>
                </tr>
                <tr>
                    <td>Págnas Visitadas</td>
                    <td><?= json_encode($_SESSION['paginas_visitadas'])?></td>
                </tr>
            </tbody>
            
        </table>
        
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>