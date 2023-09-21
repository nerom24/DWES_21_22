<?php

class Corredor {
    private $id;
    private $nombre;
    private $apellidos;
    private $ciudad;
    private $fechaNacimiento;
    private $sexo;
    private $email;
    private $dni;
    private $edad;
    private $id_categoria;
    private $id_club;

    public function __construct (
        $id = null,
        $nombre = null,
        $apellidos = null,
        $ciudad = null,
        $fechaNacimiento = null,
        $sexo = null,
        $email = null,
        $dni = null,
        $edad = null,
        $id_categoria = null,
        $id_club = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->ciudad = $ciudad;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->id_categoria = $id_categoria;
        $this->id_club = $id_club;
    }

    public function edad_actual() {
        $nacimiento = new DateTime($this->fechaNacimiento);
        $hoy = new DateTime();
        $diferencia = $hoy->diff($nacimiento);
        $this->edad = $diferencia->y;
        
    }

    public static function cabeceraTabla() {
        $cabecera = [
            "#",
            "Nombre",
            "Apellidos",
            "Email",
            "Edad",
            "Categoría",
            "Club",
            "Acciones"
        ];
        
        return $cabecera;
    }

    public static function genero() {
        $genero = [
                "H", 
                "M", 
                "S"
        ];
        return $genero;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     */ 
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @return  self
     */ 
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }


    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of id_categoria
     */ 
    public function getId_categoria()
    {
        return $this->id_categoria;
    }

    /**
     * Set the value of id_categoria
     *
     * @return  self
     */ 
    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }

    /**
     * Get the value of id_club
     */ 
    public function getId_club()
    {
        return $this->id_club;
    }

    /**
     * Set the value of id_club
     *
     * @return  self
     */ 
    public function setId_club($id_club)
    {
        $this->id_club = $id_club;

        return $this;
    }

    public function mostrarNombreCat () {

        if ($this->id_categoria == '1') {
            $nomCategoria = "Infantil";
        } else if ($this->id_categoria == '2') {
            $nomCategoria = "Junior";
        } else if ($this->id_categoria == '3') {
            $nomCategoria = "Juvenil";
        } else if ($this->id_categoria == '4') {
            $nomCategoria = "Senior A";
        } else if ($this->id_categoria == '5') {
            $nomCategoria = "Senior B";
        } else if ($this->id_categoria == '6') {
            $nomCategoria = "Veteranos A";
        } else if ($this->id_categoria == '7') {
            $nomCategoria = "Veteranos B";
        } else if ($this->id_categoria == '8') {
            $nomCategoria = "Veteranos C";
        }

        return $nomCategoria;
    }

    public function mostrarNombreClub () {
        if ($this->id_club == '1') {
            $nomClub = "NUT";
        } else if ($this->id_club == '2') {
            $nomClub = "CAV";
        } else if ($this->id_club == '3') {
            $nomClub = "ACG";
        } else if ($this->id_club == '4') {
            $nomClub = "ADJ";
        } else if ($this->id_club == '5') {
            $nomClub = "CAF";
        }

        return $nomClub;
    }
}

?>