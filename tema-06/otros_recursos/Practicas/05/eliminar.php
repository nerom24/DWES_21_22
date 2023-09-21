<?php 
	/**
	* 	@nombre: eliminar.php 
	* 	@descripción: elimina el objeto correspondiente al indice pasado
	* 	@get: id - índice correspondiente al objeto que se desea eliminar
	**/ 
	
	
	//incluimos clase usuario y usuarios
	include ("classUsuarios.php");

	session_start();

	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}

	//id del objeto a eliminar
	$id = $_GET['id'];

	$key = $_SESSION['indUsuario'];
    
    if ($id == $key) {
        ?>
        <script language="javascript">
            window.location = "acceso.php";
            alert("Operación No Admitida");
        </script>
        <?php
    } else {
    	$_SESSION['arrayUsuarios']->eliminar($id);
    	header('location: acceso.php');
    }
	
?>
