<?php
	/* 
	Añadir nuevo elemento en la agenda de contactos
	*/ 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionArticulos.php");

	//creamos variables locales con los valores del formulario POST
	$cod = $_POST['cod'];
	$desc = $_POST['desc'];
	$model = $_POST['model'];
	$cat = $_POST['cat'];
	$unit = $_POST['unit'];
	$precio = $_POST['precio'];

	//declaramos la variable agenda como cat array vacío
	//$articulos = array();

	//cargamos la agenda con los valores de la función.
	$articulos = loadArticulos();

	$key = array_search($cod,array_column($articulos, 'Codigo'));
	
	//Comprobar existencia de la clave
	if($key !== false) {
		echo '<script language="javascript">
				window.location = "formNuevo.php";
				alert("El articulo ya existe");
			</script>'; 
	}  
	
		
	//Añade nuevo artículo
	$articulos = addArticulo($articulos, $cod, $desc, $model, $cat, $unit, $precio);
	
	ksort($articulos);
	//Carga Plantilla de Agenda
	plantillaArticulos($articulos);

?>