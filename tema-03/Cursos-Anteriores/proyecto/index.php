<?php
/*
 Pintar_cabecera: Esta función pintará la cabecera de una tabla donde se muestran los contactos
*/
function cabeceraTabla()
    {
    ?>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th> · </th>
        <th>Usuario</th>
        <th>Email</th>
		 <th>Tipo</th>
		 <th>Contraseña</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    }
 
/* función que pinta el fin dela tabla para la agenda, no recibe parámetros*/
function pieTabla()
    {
    ?>
    </tbody>
    </table>
    <?php
    }
     
     
/*
Función mostrar Usuario
*/
function mostrarUsuario($pUsuario, $pEmail, $pTipo, $pTclave)
    {
    	?>
    <tr><td>
    <input type="checkbox" value="<?php echo $pUsuario; ?>" name="check[]"
		<?php
			if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_REQUEST['allSeleccion']))) {
				//Selecciono todos los usuarios
				echo 'checked="checked"';
			}
		?>
    >
    </td><td>
    <?PHP echo $pUsuario; ?>
    </td><td>
    <?PHP echo $pEmail; ?>
	</td><td>
	<?PHP echo $pTipo; ?>
	</td><td>
	<?PHP echo $pTclave; ?>
    </td></tr>
    	<?PHP  
    }
 
/*Función que muestra toda la tabla, recibe un vector tipo agenda y llama a mostrar persona por cada elemento*/
function mostrar ($pUsuarios)
    {
    cabeceraTabla();
    foreach ($pUsuarios as $usuario => list($email, $tipo, $clave))
        {
        	mostrarUsuario($usuario, $email, $tipo, $clave);
        }
    pieTabla();
    }
 
function iniUsuarios() {
		$pUsuarios = array(
		"Rodrigo"=>array("rodrigo@gmail.com", "Administrador", "1234567"),
        "Benito"=>array("benito@gmail.com", "Colaborador", "32132111"),
        "Andres"=>array("andres@gmail.com", "Editor", "232323233"));
        return $pUsuarios;
	}


function anadeUsuario($pUsuarios, $pDatos)
    {
    // Añade al array de usuarios
    $usu=$pDatos['usuario'];
    $pUsuarios[$usu]= array($pDatos['email'], $pDatos['tipo'], $pDatos['clave']);
    return $pUsuarios;
    }

function eliminarUsuarios($pUsuarios, $check){
	foreach ($check as $uEliminar){
		unset ($pUsuarios[$uEliminar]);
	}
	return $pUsuarios;
	}

//Esta función tampoco es necesaria
/*function eliminarCheck($pUsuarios, $check){
	foreach ($check as $uEliminar){
		unset ($check[$uEliminar]);
	}
	return $check;
	}*/

// Función No necesaria
/*function allSeleccion($pUsuarios, $pCheck){
	foreach ($pUsuarios as $usuario=>$valores){
		$pCheck[]=$usuario;
	}
	return $pCheck;
	}*/

function allNoSeleccion($pCheck){
	foreach ($pCheck as $seleccion=>$valores){
		unset ($pCheck[$seleccion]);
	}
	return $pCheck;
	}


// Se inicia sesión    
	session_start();
	//$_SESION["usuarios"]

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Añadir Usuario
		if (isset($_REQUEST['anadir'])) {
		 	$_SESSION["usuarios"]=anadeUsuario($_SESSION["usuarios"], $_POST);
			} 
		// Eliminar Usuarios
		if (isset($_REQUEST['eliminarUser'])){
			$_SESSION["usuarios"]=eliminarUsuarios($_SESSION["usuarios"], $_POST['check']);
			//$_POST['check']=eliminarCheck($_SESSION["usuarios"], $_POST['check']);
		}
		// La selección de todos los usuarios se realiza en el checbox del formulario
		// No selecciono ningún usuario
		if (isset($_REQUEST['allNoSeleccion'])){
			if (!empty($_POST['check']))
			$_POST['check']=allNoSeleccion($_POST['check']);
		}
	}
	else {
		$_SESSION["usuarios"]=iniUsuarios();
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Agenda de Contactos</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Proyecto - Gestión de Usuarios</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<nav>
		<!-- Especificar main-menu() -->
		<div class="btn-group" role="group" aria-label="...">
					<input type="submit" class="btn btn-default" value="Eliminar" name="eliminarUser" /> 
					<input type="submit" class="btn btn-default" value="Seleccionar Todos" name="allSeleccion" /> 
					<input type="submit" class="btn btn-default" value="Borrar Selección" name="allNoSeleccion" />   
				</div>
		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal">			
			<span class="glyphicon glyphicon-option-vertical"></span>
		</button>
		</nav>
		<section>
			<article>
				<!-- 
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<input class="btn btn-default" type="submit" value="Nuevo" name="nuevo">
				</form> -->
				
				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				    <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> -->
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Gestión Usuarios</h4>
					    </div>
				      	<div class="modal-body">
							<div class="form-group">
								<label for="usuario">Usuario:</label>
  								<input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario" autofocus>
							</div>
							<div class="form-group">
    							<label for="email">Email:</label>
    							<input type="email" class="form-control" name="email" placeholder="Correo electrónico">
  							</div>					
							
  							<div class="form-group">
  								<label for="tipo">Tipo Usuario:</label>
								<select class="form-control" name="tipo">
								    <option value="Administrador">Administrador</option> 
							   		<option value="Editor">Editor</option> 
									<option value="Colaborador">Colaborador</option>
									<option value="Visitante">Visitante</option> 
								</select>
							</div>
							<div class="form-group">
    							<label for="clave">Password:</label>
    							<input type="password" class="form-control" name="clave">
  							</div>
					    </div>
					    <div class="modal-footer">
					    <div class="btn-group" role="group" aria-label="...">
						    <input type="submit" class="btn btn-default" value="Añadir" name="anadir" />
						    <input type="submit" class="btn btn-default" value="Actualizar" name="anadir" />
						    <input type="submit" class="btn btn-default" value="Suprimir" name="suprimir" />
						</div>
						<div class="btn-group" role="group" aria-label="...">
						    <input type="reset" class="btn btn-default" value="Borrar" />
						    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					    </div>
					    </div>
					<!--</form> -->
				    </div>
				  </div>
				</div>
				<!-- Fin del Modal -->
				<!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> -->
				<?php 
					// ordena el array por la clave índice
					ksort($_SESSION["usuarios"]);
					mostrar($_SESSION["usuarios"]);
				?>
				<!--
				<div class="btn-group" role="group" aria-label="...">
					<input type="submit" class="btn btn-default" value="Eliminar" name="eliminarUser" /> 
					<input type="submit" class="btn btn-default" value="Seleccionar Todos" name="allSeleccion" /> 
					<input type="submit" class="btn btn-default" value="Borrar Selección" name="allNoSeleccion" />   
				</div> -->
				</form>
				
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
<?php 
	
?>