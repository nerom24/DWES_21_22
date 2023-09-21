<?php
class Alumno
{
	private $idAlumno;
	private $nombre;
	private $apellidos;
	private $email;
	private $telefono;
	private $direccion;
	private $poblacion;
	private $provincia;
	private $nacionalidad;
	private $dni;
	private $fechaNac;
	private $idCurso;

	public function __construct(
		$pidAlumno=null, 
		$pnombre=null, 
		$papellidos=null, 
		$pemail=null, 
		$ptelefono=null, 
		$pdireccion=null, 
		$ppoblacion=null, 
		$pprovincia=null, 
		$pnacionalidad=null, 
		$pdni=null, 
		$pfechaNac=null, 
		$pidCurso=null
		)
	{
		$this->idAlumno=$pidAlumno;
		$this->nombre=$pnombre;
		$this->apellidos=$papellidos;
		$this->email=$pemail;
		$this->telefono=$ptelefono;
		$this->direccion=$pdireccion;
		$this->poblacion=$ppoblacion;
		$this->provincia=$pprovincia;
		$this->nacionalidad= $pnacionalidad;
		$this->dni=$pdni;
		$this->fechaNac=$pfechaNac;
		$this->idCurso=$pidCurso;

	}

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}