<?php	
	session_start(); 
	require_once('class/explorador.php'); 
	
	$archivo = basename($_SERVER['PHP_SELF']);

	if (isset($_SESSION['actual'])) {
		$explorar = new Explorador("raiz", $_SESSION['actual']);
	}
	else{
		
		$explorar = new Explorador("raiz", "raiz");
		$_SESSION['actual'] = "raiz";
	}

	if (isset($_REQUEST['raiz'])) {
		$_SESSION['actual'] = "raiz";
	}

	//eliminar lote archivos y carpetas
	if (isset($_REQUEST['eliminarLote']) && (!empty($_POST['check']))) {
		$explorar->eliminar($_POST['check']);
		$_SESSION['mensaje'] = "Eliminación realizada con éxito";
	}
	
	//quitar seleccion
	if (isset($_REQUEST['noSelect'])) {			
		$_POST['check']=array();
	}

	//abrir directorio
	if (isset($_REQUEST['abrir']) && (!empty($_POST['check']))) {
		$explorar->abrirDirectorio($_POST['check'][0]);
		$_SESSION['actual'] = getcwd();
	}
	
	//cerrar directorio
	if (isset($_REQUEST['cerrar'])) {
		$explorar->cerrarDirectorio();
		$_SESSION['actual']=getcwd();
	}

	//Sube sólo un archivo seleccionado
	if (isset($_REQUEST['subirArchivo']) && isset ($_FILES['archivo'])) {
			$explorar->subirArchivo($_FILES['archivo']);
			$_SESSION['mensaje'] = "Archivo subido con éxito";
	}
	//Descarga el primer archivo seleccionado
	if (isset($_REQUEST['descargar']) && (!empty($_POST['check']))) {
		$explorar->descargarArchivos($_POST['check']);
		$_SESSION['mensaje'] = "Archivo descargado con éxito";
	}
	if (isset($_REQUEST['comprimir']) && (!empty($_POST['check']))) {
		$explorar->comprimir($_POST['check']);
		$_SESSION['mensaje'] = "Archivo comprimido con éxito";
	}
	
	//Crear directorio
	if (isset($_REQUEST['crear'])) {
		$explorar->crearDirectorio($_POST['directorio']);
		$_SESSION['mensaje'] = "Directorio creado con éxito";
	}
	if (isset($_REQUEST['cambiar']) && (!empty($_POST['check']))) {
		$explorar->cambiarNombre($_POST['check'][0], $_POST['nuevoNombre']);
		$_SESSION['mensaje'] = "Cambio de nombre realizado con éxito";
	}

	if (isset($_SESSION['mensaje'])) {
		$mensaje = $_SESSION['mensaje'];
		unset($_SESSION['mensaje']);
	}
	
	

?>