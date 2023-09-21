<?php  
	class arrayAlumnos{

        private $tabla;

    public function __construct(
        $tabla = null
    ) {
        $this->tabla = [];
    }

    public static function asignaturas() {
        $asignaturas = [
            "Php",
            "Javascript",
            "Diseño",
            "Despliegue",
            "Economía",
            "HLC",
        ];

        return $asignaturas;
    }

    public static function cursos() {
        $cursos = [
            "1DAW",
            "2DAW",
            "1SMR",
            "2SMR",
            "1AD",
            "2AD",
        ];

        return $cursos;
    }

   
    /**
     * Get the value of tabla
     */ 
    public function getTabla()
    {
            return $this->tabla;
    }

    /**
     * Set the value of tabla
     *
     * @return  self
     */ 
    public function setTabla($tabla)
    {
            $this->tabla = $tabla;

            return $this;
    }

    public function create(Alumno $alumno) {
        $this->tabla[] = $alumno;
    }

    public function read($indice) {
        return $this->tabla[$indice];
    }

    public function delete($indice) {
        unset($this->tabla[$indice]);
        array_values($this->tabla);
    }

    public function update(Alumno $alumno, $indice) {
    
        $this->tabla[$indice] = $alumno;
       
    }

    public function ordenar($campo) {
        
        $tabla = [];
        foreach ($this->tabla as $objeto) {
            $tabla[] = (array) $objeto;
        }
        
        $aux = [];
        foreach ($tabla as $key => $registro) {
            $aux[$key] = $registro[$campo];
        }
        
        array_multisort($aux, SORT_ASC, $tabla);
      
        var_dump($tabla);
        exit(0);
    }

    public function filtrar($expresion) {
        
        $aux = array();
	
		foreach ($this->tabla as $objeto) {
            $registro = (array) $objeto;

			if (in_array($expresion, $registro)) {

				$aux[] = $objeto;

			}
		}

        $this->tabla = $aux;
        
    }

    public function generarTabla() {
        
        $this->tabla = 
            
            [
                new Alumno(
                    1,
                    "Pablo",
                    "email@email.com",
                    "Ubrique",
                    "2000-12-13",
                    "2DAW",
                    ["Php", "Javascript", "Economía"]
                ),

                new Alumno(
                    2,
                    "María",
                    "maria@email.com",
                    "Ubrique",
                    "2005-11-20",
                    "2DAW",
                    ["Php", "Javascript", "Economía", "Despliegue"]
                )
            ];

    
    }

    public function contar() {
        return count($this->tabla);
    }

    
}
?>