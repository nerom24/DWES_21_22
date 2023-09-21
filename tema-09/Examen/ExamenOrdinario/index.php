<?php	
	require_once 'alumno.entidad.php';  
	require_once 'alumno.model.php';

	// Logica
	
	$model = new AlumnoModel();
	$arrayAlumnos=$model->obtenerArray();


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_REQUEST['eliminarLote']) && (!empty($_POST['check']))) {
			$model->eliminarLote($_POST['check']);
		}
		if (isset($_REQUEST['allNoSeleccion']) && (!empty($_POST['check']))) {
			$_POST['check']=array();
		}
		if (isset($_REQUEST['buscar']) && (!empty($_POST['expresionBuscar']))) {
			$arrayAlumnos=$model->buscar($_POST['expresionBuscar']);
		}
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
	<title>Gestión Alumnos PDO</title>
</head>
<body>
	<header class="jumbotron text-center">
            <h1>Examen T8 - Ejercicio 1 </h1>
            <h2>Tema 8. Generación PDF</h2>
    </header>
	
	<div class="container">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<nav>
		<!-- Especificar main-menu() -->
		<div class="row">		
			<div class="btn-group col-md-5" role="group" aria-label="...">
				<input type="submit" class="btn btn-default" value="Eliminar" name="eliminarLote" /> 
				<input type="submit" class="btn btn-default" value="Seleccionar Todos" name="allSeleccion" /> 
				<input type="submit" class="btn btn-default" value="Borrar Selección" name="allNoSeleccion" />
				<button type="button" class="btn btn-default">PDF</button>  
			</div>
			<div class="col-md-5">
				<div class="col-md-11">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Buscar..." name="expresionBuscar">
		        </div>
		        </div>
		        <div class="col-md-1">
		        <button type="submit" class="btn btn-default" name="buscar" title="Buscar">
		        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		        </button>
    			</div>
			</div>
			<div class="col-md-2">
			<button type="button" class="btn btn-default pull-right" title="Nuevo">	
				<a href="gesalumnos.php?action=insertar">		
				<span class="glyphicon glyphicon-option-vertical"></span>
				</a>
			</button>
			</div>
		</div>
		</nav>
		<section>
			<article>
						
				 <table class="table table-striped table-hover">
				    <thead>
				        <tr>
				        <th>.</th>
				        <th>#</th>
				        <th>Nombre</th>
				        <th>Apellidos</th>
				        <th>Email</th>
				        <th>Telefono</th>
				        <th>Nacionalidad</th>
				        <th>DNI</th>
				        <th>Curso</th>
				        <th>Acciones</th>
				        </tr>
				    </thead>
				    <tbody>
					
                    <?php $cont=1; foreach($arrayAlumnos as $r): ?>
                    <?php $idA = $r->__GET('idAlumno'); ?>
                        <tr>
                        	<td>
                            <input type="checkbox" value="<?php echo $idA; ?>" name="check[]" 
							    <?php
							      if (isset($_REQUEST['allSeleccion'])) {
							        //Selecciono todos los usuarios
							        echo 'checked="checked"';
							      }
							    ?>
							>
							</td>
							
                            <td><?php echo $cont++ ?></td>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('apellidos'); ?></td>
                            <td><?php echo $r->__GET('email'); ?></td>
                            <td><?php echo $r->__GET('telefono'); ?></td>
                            <td><?php echo $r->__GET('nacionalidad'); ?></td>
                            <td><?php echo $r->__GET('dni'); ?></td>
                            <td><?php echo $model->obtenerNombreCurso($r->__GET('idCurso')); ?></td>
							<!-- Acciones -->
                            <td>
                            	<div class="btn-group">
    							
    							<button type="button" class="btn btn-default" title="Editar">
      							<a href="gesalumnos.php?action=editar&id=<?php echo $idA; ?>"><span class="glyphicon glyphicon-edit"></span></a>
    							</button>

    							<button type="button" class="btn btn-default" title="Mostrar">
    							<a href="gesalumnos.php?action=mostrar&id=<?php echo $idA; ?>">
							      <span class="glyphicon glyphicon-eye-open"></span>
							    </a>
							    </button>
 								
							    <button type="button" class="btn btn-default" title="Eliminar">
							    <a href="gesalumnos.php?action=eliminar&id=<?php echo $idA; ?>">
							      <span class="glyphicon glyphicon-trash"></span>
							    </a>
							    </button>
							    <button type="button" class="btn btn-default" title="Pdf">
							    <a href="imprimirPdf.php?&id=<?php echo $idA; ?>">
							      <span class="glyphicon glyphicon-print"></span>
							    </a>
							    </button>
							    </button>
							    <button type="button" class="btn btn-default" title="Email">
							    <a href="enviarEmail.php?&id=<?php echo $idA; ?>">
							      <span class="glyphicon glyphicon-envelope"></span>
							    </a>
							    </button>
 
							    
 
							    
  								</div>
                            </td>
                                  
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>     
				
				
			</article>
		</section>
		</form>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
