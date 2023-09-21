<?php
    require_once 'pdf.php'; 
    require_once 'alumno.entidad.php';  
    require_once 'alumno.model.php';
    $alm = $model->Obtener($_REQUEST['id']);
    ...
    ...
?>