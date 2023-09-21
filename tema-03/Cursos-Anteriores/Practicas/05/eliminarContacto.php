<?php 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionAgenda.php");
	
	$usuario = $_POST['usuario'];
	
	$agenda = array();

	$agenda = loadAgenda();

	if( !array_key_exists($usuario,$agenda)){
		echo '<script language="javascript">
				alert("Usuario no existe");
				window.location = "formEliminar.php";
		</script>';
	} 

	$agenda = deleteAgenda($agenda, $usuario);
	
	asort($agenda);

	//Carga Plantilla de Agenda
	plantillaAgenda($agenda);

?>