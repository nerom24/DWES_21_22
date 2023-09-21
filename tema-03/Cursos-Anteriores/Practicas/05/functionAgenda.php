<?php 

/* 
	funciones Agenda de Contactos 

*/

//Inicializa agenda con 5 contactos
function loadAgenda() {

	$pAgenda = array(
			"MCD" => array("Manuel Cruz Doblas", "mcd@gmail.com","Visitante","123"),
			"ATV" => array("Antonio Tamayo", "atv@gmail.com","Colaborador","123"),
			"JSI" => array("Jose Manuel Iglesias","jsi@gmail.com","Visitante","123"),
			"JCJ" => array("Jose Canto","jcj@gmail.com","Editor","123"),
			"DRF" => array("Daniel Rubio","drf@gmail.com","Administrador","123")
		);
	
	return ($pAgenda);

}

//Actualiza o añade un nuevo valor en la agenda
function updateAgenda($pAgenda, $pUsuario, $pNombre, $pEmail, $pTipo, $pContrasena) {

	$pAgenda[$pUsuario] = [$pNombre, $pEmail, $pTipo, $pContrasena];

	return($pAgenda);
}

//Eliminar un registro de la agenda
function deleteAgenda($pAgenda, $pUsuario) {

	unset($pAgenda[$pUsuario]);

	return ($pAgenda);

 }

?>
