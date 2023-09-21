<?php  
	class Cliente{

		private $id;
		private $nombre;
                private $nif;
                private $poblacion;
                private $nacionalidad;
                private $sectores;
                private $observaciones;

	public function __construct(
                $id = null, 
                $nombre = null,
                $nif = null,
                $poblacion = null,
                $nacionalidad = null,
                $sectores = [],
                $observaciones = null
                
        ){
                $this->id = $id;
                $this->nombre = $nombre;
                $this->nif = $nif;
                $this->poblacion = $poblacion;
                $this->nacionalidad = $nacionalidad;
                $this->sectores = $sectores;
                $this->observaciones = $observaciones;
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
                 * Get the value of nif
                 */ 
                public function getNif()
                {
                                return $this->nif;
                }

                /**
                 * Set the value of nif
                 *
                 * @return  self
                 */ 
                public function setNif($nif)
                {
                                $this->nif = $nif;

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
                 * Get the value of nacionalidad
                 */ 
                public function getNacionalidad()
                {
                                return $this->nacionalidad;
                }

                /**
                 * Set the value of nacionalidad
                 *
                 * @return  self
                 */ 
                public function setNacionalidad($nacionalidad)
                {
                                $this->nacionalidad = $nacionalidad;

                                return $this;
                }

                /**
                 * Get the value of sectores
                 */ 
                public function getSectores()
                {
                                return $this->sectores;
                }

                /**
                 * Set the value of sectores
                 *
                 * @return  self
                 */ 
                public function setSectores($sectores)
                {
                                $this->sectores = $sectores;

                                return $this;
                }

                /**
                 * Get the value of observaciones
                 */ 
                public function getObservaciones()
                {
                                return $this->observaciones;
                }

                /**
                 * Set the value of observaciones
                 *
                 * @return  self
                 */ 
                public function setObservaciones($observaciones)
                {
                                $this->observaciones = $observaciones;

                                return $this;
                }
}
?>