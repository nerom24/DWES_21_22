<?php 

/* 
	funciones Agenda de Contactos   

*/

//Inicializa agenda con 5 contactos
function loadAgenda() {

	$pAgenda = array(
			"MCD" => array("Manuel Cruz Doblas", "956321741"),
			"ATV" => array("Antonio Tamayo", "654123987"),
			"JSI" => array("Jose Manuel Iglesias","987654321"),
			"JCJ" => array("Jose Canto","963852741"),
			"DRF" => array("Daniel Rubio","987325698")
		);
	
	return ($pAgenda);

}

//Actualiza o añade un nuevo valor en la agenda
function updateAgenda($pAgenda, $pUsuario, $pNombre, $pTelefono ) {

	$pAgenda[$pUsuario] = [$pNombre, $pTelefono];

	return($pAgenda);
}

//Eliminar un registro de la agenda
function deleteAgenda($pAgenda, $pUsuario) {

	unset($pAgenda[$pUsuario]);

	return ($pAgenda);

 }

?>
