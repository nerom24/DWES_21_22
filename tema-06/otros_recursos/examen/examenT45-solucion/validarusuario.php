<?php 
	session_start();
	include "usuario.php";
	include "listausuario.php";

	
	$listaUsuarios = new ListaUsuario();
	$listaUsuarios->insertarUsuario(new Usuario("Carlos","carlos@gmail.com","1234",0));
	$listaUsuarios->insertarUsuario(new Usuario("Juan","juan@gmail.com","123456",1));
	$listaUsuarios->insertarUsuario(new Usuario("Maria","maria@gmail.com","123477",2));
	$listaUsuarios->insertarUsuario(new Usuario("Carlos","carlos@gmail.com","231243",0));


	$posicion =  $listaUsuarios->buscarUsuario($_POST['InputEmail']);
	if ($posicion !== false ) {
		$clave = $listaUsuarios->getlclave($posicion);
		if ($clave == $_POST['InputPassword']) {
			if ($_POST["check"] == 1 ) {
				setcookie("Email",  $_POST['InputEmail'], time()+3600);
				setcookie("clave",  $_POST['InputPassword'], time()+3600);
			}
			$_SESSION["user"] = $listaUsuarios->getlUser($posicion);
			$_SESSION["clave"] = $clave;
			$_SESSION["email"] = $_POST['InputEmail'];
			$_SESSION["tipo"] = $listaUsuarios->getlTipo($posicion);
 			header("location: acceso.php");
		}else{
			setcookie("Error", "Contraseña no valida", time()+3600);
			header("location: eliminarSesion.php");
		}
	}else{
		setcookie("Error", "Email no encontrado", time()+3600);
		header("location: eliminarSesion.php");
	}
 ?>