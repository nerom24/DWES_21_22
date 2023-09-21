<?php
/*
 Pintar_cabecera: Esta función pintará la cabecera de una tabla donde se muestran los contactos
*/
function pintar_cabecera()
    {
    ?>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    }
 
/* función que pinta el fin dela tabla para la agenda, no recibe parámetros*/
function pintar_fin_tabla()
    {
    ?>
    </tbody>
    </table>
    <?php
    }
     
     
/*
Función mostrar persona, es una función que muestra un contacto en la tabla.
Será utilizada para mostrar la agenda persona por persona
*/
function mostrar_persona($nombre,$telefono)
    {
    echo "<tr><td>";
    echo $nombre;
    echo "</td><td>";
    echo $telefono;
    echo "</td></tr>";  
    }
 
/*Función que muestra toda la tabla, recibe un vector tipo agenda y llama a mostrar persona por cada elemento*/
function mostrar ($agen)
    {
    pintar_cabecera();
    foreach ($agen as $nom=>$tel)
        {
        mostrar_persona($nom,$tel);
        }
    pintar_fin_tabla();
    }
 
/*Función que busca una persona en la agenda, si la encuetra la muestra por pantalla
Recibe un vector tipo agenda y un nombre*/
function buscar($agen,$nom)
    {
    echo "<p>Resultado para la busqueda de $nom</p>";
    pintar_cabecera();
    foreach ($agen as $nombre=>$telefono)
        if ($nom==$nombre)
            mostrar_persona($nombre,$telefono);
    pintar_fin_tabla();
    }
 
/*
Función que borra una persona de la agenda. si la encuetra
Recibe un vector tipo agenda y un nombre, retorna la agenda borrada
*/
function borrarContacto($agen,$nom)
    {
    if (isset ($agen[$nom]))  //Si exite $agenda['pepito'] entonces borra pepito
        unset($agen[$nom]);
    return $agen;
    }

 function anadeContacto($agen, $nom, $tel)
    {
    $agen[$nom]= $tel;
    return $agen;
    }

	
function iniAgenda() {
		$agen = array(
		"Manolo"=>678985678,
        "Benito"=>689345687,
        "Andres"=>675324312,
        "Francisco"=>674321543,
        "José"=>698099089);
        return $agen;

	}
    
	if (!empty($_POST['aTelefonos'])) {		
			//Reconstruyo la agenda con los valores ocultos devueltos del formulario
			$telefonos = explode("," , $_POST['aTelefonos']);			
			$nombres = explode("," , $_POST['aNombres']);
			$agenda=array_combine($nombres, $telefonos);
		}
	else {	$agenda=iniAgenda(); 
	}


    // if (!isset($agenda)) $agenda=iniAgenda();
    if (isset($_REQUEST['anadir'])) {
    	$agenda=anadeContacto($agenda, $_POST['nombre'], $_POST['telefono']);}
    	//		 $agenda[$_POST['nombre']]= $_POST['telefono'];
    if (isset($_REQUEST['suprimir'])) {
    	$agenda=borrarContacto($agenda, $_POST['nombre']);
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
					<h1>Mi Agenda de Contactos - Arrays</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
			
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
				    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Gestión Contactos</h4>
					    </div>
				      	<div class="modal-body">
							<div class="form-group">
								<label for="Nombre">Nombre </label>
								<input type="text" class="form-control" name="nombre" />
							</div>
							<div class="form-group">
								<label for="Teléfono">Teléfono </label>
								<input type="text" class="form-control" name="telefono" size="10" />
							</div>
							<!-- Campos ocultos para reconstruir la agenda -->
							<input name="aTelefonos" type="hidden" value="<?php if (isset($agenda)) echo implode("," , $agenda) ?>" style="text-align:right;" />
							<input name="aNombres" type="hidden" value="<?php if (isset($agenda)) echo implode("," , array_keys($agenda)) ?>" style="text-align:right;" />
							<!-- Fin Campos ocultos -->
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
					</form>
				    </div>
				  </div>
				</div>
				<!-- Fin del Modal -->
				<?php 
					// ordena el array por la clave índice
					ksort($agenda);
					mostrar($agenda);
				?>
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