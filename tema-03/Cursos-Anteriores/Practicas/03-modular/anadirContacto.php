<?php
	/* 
	Añadir nuevo elemento en la agenda de contactos
	*/ 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionAgenda.php");

	//creamos variables locales con los valores del formulario POST
	$user = $_POST['user'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];

	//declaramos la variable agenda como tipo array vacío
	$agenda = array();

	//cargamos la agenda con los valores de la función.
	$agenda = loadAgenda();

	//Comprobar existencia de la clave
	if(array_key_exists($user,$agenda)) {
		echo '<script language="javascript">
				alert("El usuario ya existe");
				window.location = "formNuevo.php";
			</script>'; 
	} 
		
	//Actualiza agenda
	$agenda = updateAgenda($agenda, $user, $nom, $tel);
	
	//Ordenar agenda por la clave
	asort($agenda);

	//Carga Plantilla de Agenda
	plantillaAgenda($agenda);

?>