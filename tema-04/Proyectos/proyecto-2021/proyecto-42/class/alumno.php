<?php  
	class Alumno{

		private $id;
		private $nombre;
                private $email;
                private $poblacion;
                private $fechaNacimiento;
                private $curso;
                private $asignaturas;

	public function __construct(
                $id = null, 
                $nombre = null,
                $email = null,
                $poblacion = null,
                $fechaNacimiento = null,
                $curso = null,
                $asignaturas = []
        ){
                $this->id = $id;
                $this->nombre = $nombre;
                $this->email = $email;
                $this->poblacion = $poblacion;
                $this->fechaNacimiento = $fechaNacimiento;
                $this->curso = $curso;
                $this->asignaturas = $asignaturas;
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
         * Get the value of poblacion
         */ 
        public function getPoblacion()
        {
                        return $this->poblacion;
        }

        /**
         * Set the value of poblacion
         *
         * @return  self
         */ 
        public function setPoblacion($poblacion)
        {
                        $this->poblacion = $poblacion;

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
         * Get the value of curso
         */ 
        public function getCurso()
        {
                        return $this->curso;
        }

        /**
         * Set the value of curso
         *
         * @return  self
         */ 
        public function setCurso($curso)
        {
                        $this->curso = $curso;

                        return $this;
        }

        /**
         * Get the value of asignaturas
         */ 
        public function getAsignaturas()
        {
                        return $this->asignaturas;
        }

        /**
         * Set the value of asignaturas
         *
         * @return  self
         */ 
        
         public function setAsignaturas($asignaturas)
        {
                        $this->asignaturas = $asignaturas;

                        return $this;
        }

        public function getEdad() {
                $fechaNacimiento = new DateTime($this->fechaNacimiento);
                $hoy = new DateTime();
                $edad = $hoy->diff($fechaNacimiento);
                echo $edad->y;
        }
}
?>