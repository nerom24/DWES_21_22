<?php
require_once 'alumno.entidad.php'; 
require_once 'alumno.model.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();
$arrayAlumnos=$model->obtenerArrayBoth();

function permisos($privilegio, $accion){
    switch ($privilegio) {
        case 'limpiar':
            if ($accion=='insertar') {
                return true;
            }
            break;
         case 'enviar':
            if ($accion=='insertar') {
                return true;
            }
            break;
        case 'suprimir':
            if (($accion=='eliminar') OR ($accion=='editar')) {
                return true;
            }
            break;
        case 'actualizar':
            if ($accion=='editar') {
                return true;
            }
            break;
        case 'nuevo':
            if ($accion=='editar') {
                return true;
            }
            break; 
        case 'navegador':
            if ($accion!='insertar') {
                return true;
            }
            break; 
    }
    return false;
}




$disabled='';

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		
        case 'editar':
            $alm = $model->Obtener($_REQUEST['id']);
            break;

        case 'mostrar':
            $alm = $model->Obtener($_REQUEST['id']);
            $disabled=' disabled';
            break;
        
        case 'eliminar':
            $alm = $model->Obtener($_REQUEST['id']);
            $disabled=' disabled';
            break;

        case 'insertar':
            break;

    }
        
}

if (isset($_REQUEST['volver'])) {
    header('location:index.php');
}
if (isset($_REQUEST['suprimir'])) {
    $model->eliminar($alm->idAlumno);
    header('location:index.php');
}

if (isset($_REQUEST['nuevo'])) {
    header('location:gesalumnos.php?action=insertar');
}

if (isset($_REQUEST['anadir'])) {
    $alm->__SET(nombre, $_POST['nombre']);
    $alm->__SET(apellidos, $_POST['apellidos']);
    $alm->__SET(email, $_POST['email']);
    $alm->__SET(telefono, $_POST['telefono']);
    $alm->__SET(direccion, $_POST['direccion']);
    $alm->__SET(poblacion, $_POST['poblacion']);
    $alm->__SET(provincia, $_POST['provincia']);
    $alm->__SET(nacionalidad, $_POST['nacionalidad']);
    $alm->__SET(dni, $_POST['dni']);
    $alm->__SET(fechaNac, $_POST['fechaNac']);
    $alm->__SET(idCurso, $_POST['idCurso']);
    $model->registrar($alm);
    header('location:index.php');
}
if (isset($_REQUEST['actualizar'])) {
    $alm->__SET(nombre, $_POST['nombre']);
    $alm->__SET(apellidos, $_POST['apellidos']);
    $alm->__SET(email, $_POST['email']);
    $alm->__SET(telefono, $_POST['telefono']);
    $alm->__SET(direccion, $_POST['direccion']);
    $alm->__SET(poblacion, $_POST['poblacion']);
    $alm->__SET(provincia, $_POST['provincia']);
    $alm->__SET(nacionalidad, $_POST['nacionalidad']);
    $alm->__SET(dni, $_POST['dni']);
    $alm->__SET(fechaNac, $_POST['fechaNac']);
    $alm->__SET(idCurso, $_POST['idCurso']);
    $model->actualizar($alm);
    header('location:index.php');
}

// Botones de navegacion: Primero, Anterior, Siguiente, Último

if (isset($_REQUEST['primero'])) {$model->primero($arrayAlumnos);}
if (isset($_REQUEST['ultimo'])) {$model->ultimo($arrayAlumnos);}
if (isset($_REQUEST['anterior'])) {$model->anterior($alm->__GET('idAlumno'), $arrayAlumnos);}
if (isset($_REQUEST['siguiente'])) {$model->siguiente($alm->__GET('idAlumno'), $arrayAlumnos);}


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
            <h1>Gestión Alumnos PDO 2/2</h1>
            <h2>Tema 6. php y MySQL</h2>
    </header>
    
    <div class="container">
        <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <nav>
        <div class="row">
            <div class="btn-group col-md-11" role="group" aria-label="...">
                <input type="submit" class="btn btn-default " value="Volver" name="volver" /> 
                
            </div>
            <div class="col-md-1">
            <button type="submit" class="btn btn-default pull-right " name="nuevo" title="Nuevo" 
            // validar
            <?php if (!permisos('nuevo', $_REQUEST['action'])) echo "disabled"; ?>
            >     
                <span class="glyphicon glyphicon-option-vertical"></span>
            </button>
            </div>
        </div>
        </nav>
        <section>
            <article>             
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" autofocus
                    value="<?php 
                    echo $alm->nombre; 
                    ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="apellidos" class="col-sm-2 control-label">Apellidos:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apellidos"
                    value="<?php echo $alm->apellidos; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email"
                    value="<?php echo $alm->email; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>
            
            <div class="form-group">
                <label for="telefono" class="col-sm-2 control-label">Telefono:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" name="telefono"
                    value="<?php echo $alm->telefono; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-2 control-label">Direccion:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="direccion"
                    value="<?php echo $alm->direccion; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="poblacion" class="col-sm-2 control-label">Población:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="poblacion"
                    value="<?php echo $alm->poblacion; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>
            
            <div class="form-group">
                <label for="provincia" class="col-sm-2 control-label">Provincia:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="provincia"
                    value="<?php echo $alm->provincia; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="nacionalidad" class="col-sm-2 control-label">Nacionalidad:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nacionalidad"
                    value="<?php echo $alm->nacionalidad; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>              
            
            <div class="form-group">
                <label for="dni" class="col-sm-2 control-label">DNI:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="dni"
                    value="<?php echo $alm->dni; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="fechaNac" class="col-sm-2 control-label">Fecha Nacimiento:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="fechaNac"
                    value="<?php echo $alm->fechaNac; ?>"
                    <?php echo $disabled; ?>
                    >
                </div>
            </div>
            <div class="form-group">
                <label for="curso" class="col-sm-2 control-label">Curso:</label>
                <div class="col-sm-10">
                <select class="form-control" name="idCurso" <?php echo $disabled; ?>>
                    <?php $model->listaCursos($alm->idCurso); ?>
                </select>
                </div>
            </div>   
          
            <div class="row"> 
            <div class="col-md-2">
            
            </div>
            <div class="col-md-6">          
                <input type="reset" class="btn btn-default " value="Limpiar" 
                <?php if (!permisos('limpiar', $_REQUEST['action'])) echo "disabled";?>
                />
                <input type="submit" class="btn btn-default " value="Enviar" name="anadir"
                <?php if (!permisos('enviar', $_REQUEST['action'])) echo "disabled";?>
                />
                <input type="submit" class="btn btn-default" value="Actualizar" name="actualizar" 
                <?php if (!permisos('actualizar', $_REQUEST['action'])) echo "disabled";?>
                />
                <input type="submit" class="btn btn-default " value="Suprimir" name="suprimir" 
                <?php if (!permisos('suprimir', $_REQUEST['action'])) echo "disabled";?>
                />
                
            </div>
            <div class="col-md-4">
            <?php $disabled=''; ?>
            <?php if (!permisos('navegador', $_REQUEST['action'])) $disabled='disabled'; ?>
            
            <div class="btn-group pull-right" role="group" disabled>
                <button type="submit" class="btn btn-default " title="Primero" name="primero" <?php echo $disabled; ?>
                >                
                <span class="glyphicon glyphicon-step-backward"></span>
                </button>
                <button type="submit" class="btn btn-default " title="Anterior" name="anterior"
                <?php echo $disabled; ?>
                >     
                    <span class="glyphicon glyphicon-triangle-left"></span>
                </button>
                <button type="submit" class="btn btn-default " title="Siguiente" name="siguiente"
                <?php echo $disabled; ?>
                >   
                    <span class="glyphicon glyphicon-triangle-right"></span>
                </button>
                <button type="submit" class="btn btn-default " title="Último" name="ultimo"
                <?php echo $disabled; ?>
                >       
                    <span class="glyphicon glyphicon-step-forward"></span>
                </button>
            </div> 
            </div>           
            </div>
            </article>
            
        </section>
        </form>
        <footer>
            <p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p> 
        </footer>
    </div>
</body>
</html>