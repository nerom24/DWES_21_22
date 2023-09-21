<?php 
// Fuenciones y procedimientos Actividad 3.4 Formularios con validación

//Esta función permite limpiar los campos de un formulario.
//Evitando inyección de código SQL.
function text_input($data){ 
	$data = htmlspecialchars(addslashes(stripslashes(strip_tags(trim($data)))));
	return $data;
}

//Procedimientos.

//Muestra los detalles de los usuarios
function mostrarUsuario($pUsuarios) {
	echo '<tbody>';
	foreach ($pUsuarios as $detalles) {
		echo '<tr>';
		foreach ($detalles as $campos) {
			echo "<td> $campos </td>";
		}
		echo '</tr>';
	}
	echo '<tbody>';
}


//Muestra los detalles de los errores
function mostrarErrores($pErrores) {
	echo '<tbody>';
	foreach ($pErrores as $ind =>$valores) {
		echo '<tr>';
		echo "<td>$ind</td>";
		echo "<td>$valores</td>";
		echo '</tr>';
	}
	echo '<tbody>';
}


//Muestra una tabla con los detalles de los usuarios
function tablaUsuarios($pUsuarios) {

	echo "
	<legend>Formulario Validado</legend>
	<thead>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>URL</th>
		<th>Edad</th>
		<th>Estudios</th>
		<th>Usuario</th>
		<th>Password</th>
	</tr>
	</thead>";
	mostrarUsuario($pUsuarios);
}

//Muestra una tabla con los detalles de los errores
function tablaErrores($pErrores) {

	
	// Cabecera de Errores -->
	echo "
	<legend>Formulario No Validado</legend>
	<thead>
	<tr>
		<th>Nº</th>
		<th>Error</th>
	</tr>
	</thead>";
	mostrarErrores($pErrores);
}
 
?>