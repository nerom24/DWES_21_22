
<?php 

class Usuario { 

	private $id;
	private $username;
	private $nombre;
	private $apellidos;
	private $url;
    private $edad;
    private $idPerfil;
    private $cliente;
    private $email;
    private $pass;
    private $fechaReg;
    private $ultimoAcceso;


	public function __construct(

        $id=null,
        $username=null,
        $nombre=null,
        $apellidos=null,
        $url=null,
        $edad=null,
        $idPerfil=null,
        $cliente=null,
        $email=null,
        $pass=null,
        $fechaReg=null,
        $ultimoAcceso=null
		

	) {

		$this->id=$id;
        $this->username=$username;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->url=$url;
        $this->edad=$edad;
        $this->idPerfil=$idPerfil;
        $this->cliente=$cliente;
        $this->email=$email;
        $this->pass=$pass;
        $this->fechaReg=$fechaReg;
        $this->ultimoAcceso=$ultimoAcceso;

	}

	
    

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

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
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * @param mixed $idPerfil
     *
     * @return self
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     *
     * @return self
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

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
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaReg()
    {
        return $this->fechaReg;
    }

    /**
     * @param mixed $fechaReg
     *
     * @return self
     */
    public function setFechaReg($fechaReg)
    {
        $this->fechaReg = $fechaReg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUltimoAcceso()
    {
        return $this->ultimoAcceso;
    }

    /**
     * @param mixed $ultimoAcceso
     *
     * @return self
     */
    public function setUltimoAcceso($ultimoAcceso)
    {
        $this->ultimoAcceso = $ultimoAcceso;

        return $this;
    }
}



?>
