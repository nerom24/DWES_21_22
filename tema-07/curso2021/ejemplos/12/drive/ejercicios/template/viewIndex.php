<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>

<body>
    <!-- Menú Fijo parte superior -->
    <?php include_once("template/partials/menu.php");?>
    
    <!-- cabecera -->
    <?php include_once("template/partials/cabecera.php");?>

    <div class ="container">
        <?php include_once ("template/partials/notify.php") ?>
        
        <legend><?= $archivo_actual ?></legend>
        
        <!-- Tabla Usuarios -->
        <table class="table">
            <thead class="">
                <tr>
                    <th>Dato</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>   
                <tr>
                    <td>SID</td>
                    <td><?= session_id() ?></td>
                </tr>
                <tr>
                    <td>Nombre Sessión</td>
                    <td><?= session_name() ?></td>
                </tr>
                <tr>
                    <td>Contador Visitas</td>
                    <td><?= (isset($_COOKIE['contador_visitas']))? $_COOKIE['contador_visitas']: '0' ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Inicio Ultima Sesión</td>
                    <td><?= (isset($_COOKIE['fecha_hora_inicio']))? $_COOKIE['fecha_hora_inicio']: NULL ?></td>
                </tr>
                <tr>
                    <td>Fecha Hora Fin Ultima Sesión</td>
                    <td><?= (isset($_COOKIE['fecha_hora_fin']))? $_COOKIE['fecha_hora_fin']: NULL ?></td>
                </tr>
                <tr>
                    <td>Duración Ultima Sesión</td>
                    <td><?= (isset($_COOKIE['duracion']))? $_COOKIE['duracion']: NULL ?></td>
                </tr>
                <tr>
                    <td>Visitas <?= $archivo_actual?></td>
                    <td><?= $_SESSION['visitas'][$archivo_actual] ?></td>
                </tr>
                <tr>
                    <td>Págnas Visitadas</td>
                    <td><?= json_encode($_SESSION['visitas'])?></td>
                </tr>
            </tbody>
        </table>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>