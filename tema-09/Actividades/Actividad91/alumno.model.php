<?php
class AlumnoModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$dbh='mysql:host=localhost;dbname=formprofesional';
			$this->pdo = new PDO($dbh, 'root', '');
			$this->pdo->query("SET NAMES 'utf8'");
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerArray()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM alumnos");
			$stm->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Alumno');
			$stm->execute();

			// Result contiene un array de objetos tipo Alumno
			
			$result=$stm->fetchAll();

			return $result;
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerArrayBoth()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM alumnos");
			$stm->setFetchMode(PDO::FETCH_BOTH);
			$stm->execute();

			// Result contiene un array de objetos tipo Alumno
			
			$result=$stm->fetchAll();

			return $result;
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM alumnos WHERE idAlumno = ?");
			$stm->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Alumno'); 
			$stm->execute(array($id));
			$alm = $stm->fetch();
			
			return $alm;
		} catch (PDOException $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM alumnos WHERE idAlumno = ?");			          

			$stm->execute(array($id));
		} catch (PDOException $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Alumno $data)
	{
		try 
		{
			$sql = "UPDATE alumnos SET 
						nombre          = ?, 
						apellidos       = ?,
						email           = ?, 
						telefono 		= ?,
						direccion 		= ?,
						poblacion 		= ?,
						provincia 		= ?,
						nacionalidad 	= ?,
						dni 			= ?,
						fechaNac 		= ?,
						idCurso 		= ?

				    WHERE idAlumno = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					
					$data->__GET('nombre'), 
					$data->__GET('apellidos'), 
					$data->__GET('email'),
					$data->__GET('telefono'),
					$data->__GET('direccion'),
					$data->__GET('poblacion'),
					$data->__GET('provincia'),
					$data->__GET('nacionalidad'),
					$data->__GET('dni'),
					$data->__GET('fechaNac'),
					$data->__GET('idCurso'),
					$data->__GET('idAlumno'),


					)
				);
		} catch (PDOException $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
		$sql = "INSERT INTO alumnos (nombre, apellidos, email, telefono, direccion, poblacion, provincia, nacionalidad, dni, fechaNac, idCurso) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('nombre'), 
				$data->__GET('apellidos'), 
				$data->__GET('email'),
				$data->__GET('telefono'),
				$data->__GET('direccion'),
				$data->__GET('poblacion'),
				$data->__GET('provincia'),
				$data->__GET('nacionalidad'),
				$data->__GET('dni'),
				$data->__GET('fechaNac'),
				$data->__GET('idCurso')
				)
			);
		} catch (PDOException $e) 
		{
			die($e->getMessage());
		}
	}

// Otras funciones
	public function obtenerNombreCurso($pidCurso){

	try 
		{
			$curso = $this->pdo
			          ->prepare("SELECT nombreCorto FROM curso WHERE idCurso = ?");
			$curso->execute(array($pidCurso));
			$c = $curso->fetch(PDO::FETCH_OBJ);

			return $c->nombreCorto;
		} catch (PDOException $e) 
		{
			die($e->getMessage());
		}
	}
	public function obtenerCorreo($idAlumno)
	{
		try {
			$correo = $this->pdo->prepare("SELECT email FROM alumnos WHERE idAlumno = ?");
			$correo->execute(array($idAlumno));
			$e = $correo->fetch(PDO::FETCH_OBJ);
				return $e->email;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

//Lista del Select Cursos
	public function listaCursos($pidCurso) {
	$curso = $this->pdo->prepare("SELECT idCurso, nombreCorto FROM curso");
	$curso->execute();
	while ($c=$curso->fetch(PDO::FETCH_OBJ)){
		?>
		<option value="<?php echo $c->idCurso;?>"
		<?php if ($pidCurso == $c->idCurso) echo ' selected'; ?>
		>
		<?php echo $c->nombreCorto; ?>
		</option>
		
		<?php
		}
	}
	
// Eliminar
	public function eliminarLote($pCheck) {
	foreach ($pCheck as $seleccion=>$alumno){
      $this->eliminar($alumno);
  	}
	}


  // Primero
	public function primero($aAlumnos) {
	$action=$_REQUEST['action'];
	$idAlumno=$aAlumnos[0][0];
	header('location:gesalumnos.php?action='.$action.'&id='.$idAlumno.'');
    }
	
	
	public function ultimo($aAlumnos) {
	$action=$_REQUEST['action'];
	$elementos=count($aAlumnos)-1;
	$idAlumno=$aAlumnos[$elementos][0];
	header('location:gesalumnos.php?action='.$action.'&id='.$idAlumno.'');

  	}
  
  	public function siguiente($pIdAlumno, $aAlumnos) {
	$action=$_REQUEST['action'];
	$clave=array_search($pIdAlumno, array_column($aAlumnos, 'idAlumno'));
	$idAlumno=$pIdAlumno;

	if ($clave<count($aAlumnos)-1) {
		$idAlumno=$aAlumnos[$clave+1][0];
	}
	header('location:gesalumnos.php?action='.$action.'&id='.$idAlumno.'');
	}

	public function anterior($pIdAlumno, $aAlumnos) {
	$action=$_REQUEST['action'];
	$clave=array_search($pIdAlumno, array_column($aAlumnos, 'idAlumno'));
	$idAlumno=$pIdAlumno;
	if ($clave>0) {
		$idAlumno=$aAlumnos[$clave-1][0];
	}
	header('location:gesalumnos.php?action='.$action.'&id='.$idAlumno.'');
	}

	public function buscar($expresion){
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM alumnos where nombre like '%{$expresion}%' OR apellidos like '%{$expresion}%'");
			$stm->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Alumno');
			$stm->execute();

			// Result contiene un array de objetos tipo Alumno
			
			$result=$stm->fetchAll();

			return $result;
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

}