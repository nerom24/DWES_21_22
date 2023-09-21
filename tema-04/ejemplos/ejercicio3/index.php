<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	p{
		font-style: oblique;
		font-weight: bold;
	}	
</style>
</head>

<body>
	<h1>Con este código: </h1>
		
	<p>	
		require("ClasesEj3.php");<br>
		$personas=new Personas();<br>
		//Metemos en el array que crea el metodo meter personas varias personas<br>
		$p=new Persona("Pepe","15","40");<br>
		$personas->meterPersona($p);<br>
		$p=new Persona("Juan","13","30");<br>
		$personas->meterPersona($p);<br>
		$p=new Persona("Jose","18","45");<br>
		$personas->meterPersona($p);<br>
		$p=new Persona("Jesus","17","43");<br>
		$personas->meterPersona($p);<br>
		$p=new Persona("Tomas","15","46");<br>
		$personas->meterPersona($p); <br>
		//Método que muestra todos los datos de las personas en una tabla<br>
		echo "Tabla con los datos de las personas:";<br>
		$personas->mostrarTabla();<br>
		//Método que elimina a la persona que tiene el nombre introducido por parametros.<br>
		echo "Eliminamos a Pepe";<br>
		$personas->eliminarPersona("Pepe");<br>
		//Método que comprueba si esta la persona que tiene el nombre intruducido por parametros<br>
		echo "Comprueba si existe jose: ";<br>
		if ($personas->Existe("Jose")) echo "Está en el objeto"; else echo "No está";<br>
		//Método que cambia el nombre de la persona <br>
		echo "Cambiamos Juan por Juan Jose";<br>
		$personas->cambiarNombre("Juan","Juan Jose");<br>
		//Método que cambia la edad de la persona<br>
		echo "Cambiamos la edad a Juan Jose, ahora tiene 18";<br>
		$personas->cambiarEdad("Juan Jose",18);<br>
		//Método que cambia el peso de la persona<br>
		echo "Cambiamos el peso a Juan Jose, ahora tiene 55";<br>
		$personas->cambiarPeso("Juan Jose","55");<br>
		//Método que muestra todos los datos de las personas en una tabla<br>
		echo "Tabla con los datos de las personas:";<br>
		$personas->mostrarTabla();<br>
		//Método que cuenta el numero de personas que hay en el array<br>
		echo "Hay ".$personas->getNumPersonas()." persona/s";<br>
		//Método que muestra los datos de las personas separado por comas<br>
		echo "Muestra los datos de las personas separados por coma:";<br>
		echo $personas->mostrarPersonas(); <br> 
		//Método que muestra los datos de las personas ordenados por el nombre.<br>
		echo "Muestra los datos de las personas ordenado por el nombre:";<br>
		echo $personas->ordenarPorNombre();<br>
	</p>
	<h1>El resultado es:</h1>

	<?php
		require("ClasesEj3.php");
		
		$personas=new Personas();
		//Metemos en el array que crea el metodo meter personas varias personas
		$p=new Persona("Pepe","15","40");
		$personas->meterPersona($p);
		$p=new Persona("Juan","13","30");
		$personas->meterPersona($p);
		$p=new Persona("Jose","18","45");
		$personas->meterPersona($p);
		$p=new Persona("Jesus","17","43");
		$personas->meterPersona($p);
		$p=new Persona("Tomas","15","46");
		$personas->meterPersona($p); 
		//Método que muestra todos los datos de las personas en una tabla
		echo "<br>Tabla con los datos de las personas:";
		$personas->mostrarTabla();
		//Método que elimina a la persona que tiene el nombre introducido por parametros.
		echo "Eliminamos a Pepe<br >";
		$personas->eliminarPersona("Pepe");
		//Método que comprueba si esta la persona que tiene el nombre intruducido por parametros
		echo "Comprueba si existe jose: ";
		if ($personas->Existe("Jose")) echo "<b>Está en el objeto</b><br>"; else echo "<b>No está</b><br>";
		//Método que cambia el nombre de la persona 
		echo "Cambiamos Juan por Juan Jose<br >";
		$personas->cambiarNombre("Juan","Juan Jose");
		//Método que cambia la edad de la persona
		echo "Cambiamos la edad a Juan Jose, ahora tiene 18<br >";
		$personas->cambiarEdad("Juan Jose",18);
		//Método que cambia el peso de la persona
		echo "Cambiamos el peso a Juan Jose, ahora tiene 55<br >";
		$personas->cambiarPeso("Juan Jose","55");
		//Método que muestra todos los datos de las personas en una tabla
		echo "<br>Tabla con los datos de las personas:";
		$personas->mostrarTabla();
		//Método que cuenta el numero de personas que hay en el array
		echo "<br>Hay ".$personas->getNumPersonas()." persona/s<br>";
		//Método que muestra los datos de las personas separado por comas
		echo "Muestra los datos de las personas separados por coma:<br>";
		echo $personas->mostrarPersonas();   
		//Método que muestra los datos de las personas ordenados por el nombre.
		echo "Muestra los datos de las personas ordenado por el nombre:<br>";
		echo $personas->ordenarPorNombre();   
		
	?>
</body>
</html>
