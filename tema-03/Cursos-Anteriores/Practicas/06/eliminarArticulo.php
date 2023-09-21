<?php 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionArticulos.php");
	
	$art = $_POST['art'];

	$articulos = loadArticulos();

	$key = array_search($art,array_column($articulos, 'Codigo'));
	
	if($key === false ) {
		echo '<script language="javascript">
				alert("Articulo no existe");
				window.location = "formEliminar.php";
		</script>';
	} 

	$articulos = deleteArticulo($articulos, $key);
	
	ksort($articulos);

	//Carga Plantilla de articulos
	plantillaArticulos($articulos);

?>