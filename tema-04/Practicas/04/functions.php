<?php 

/**
* Funciones de seguridad
*
*/

function text_input($data){ 
	$data = htmlspecialchars(addslashes(stripslashes(strip_tags(trim($data)))));
	return $data;
}

?>