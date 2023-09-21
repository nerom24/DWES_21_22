
<?php 

class corredor {

	private $id;
	private $nombre;
	private $apellidos;
	private $ciudad;
	private $fechaNacimiento;
    private $sexo;
    private $email;
    private $dni;
    private $edad;
    private $idCategoria;
    private $idClub;


	public function __construct(

		$pId = null,
		$pNombre = null,
		$pApellidos = null,
		$pCiudad = null,
		$pFechaNacimiento = null,
        $pSexo = null,
        $pEmail = null,
        $pDni = null,
        $pEdad = null,
        $pIdCategoria = null,
        $pIdClub = null

	) {

		$this->id = $pId;
		$this->nombre = $pNombre;
		$this->apellidos = $pApellidos;
		$this->ciudad = $pCiudad;
		$this->fechaNacimiento = $pFechaNacimiento;
        $this->sexo = $pSexo;
        $this->email = $pEmail;
        $this->dni = $pDni;
        $this->edad = $pEdad;
        $this->idCategoria = $pIdCategoria;
        $this->idClub = $pIdClub;

	}

	
   

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $idCorredor
     *
     * @return self
     */
    public function setIdCorredor($idCorredor)
    {
        $this->idCorredor = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     *
     * @return self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     *
     * @return self
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     *
     * @return self
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     *
     * @return self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     *
     * @return self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @param mixed $idCategoria
     *
     * @return self
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @param mixed $idClub
     *
     * @return self
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;

        return $this;
    }
}



?>
