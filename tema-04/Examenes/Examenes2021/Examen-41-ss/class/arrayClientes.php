<?php  
	class arrayClientes{

        private $tabla;

    public function __construct(
        $tabla = null
    ) {
        $this->tabla = [];
    }

    public static function sectores() {
        $sectores = [
            "Educación",
            "Tecnológica",
            "Administración",
            "Deporte",
            "Grandes Comercios",
            "Electrónica",
            "Peque",
            "Alimentación",
            "Ropa y Calzado",
            "Moda"
        ];

        return $sectores;
    }

    public static function paises() {
          
        $paises = array("Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Argentina","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue");


        return $paises;
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

    public function create() {
        
    }

    public function read() {
        
    }

    public function delete() {
        
    }

    public function update() {
    
        
       
    }

    public function ordenar() {
        
        
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
                new Cliente(
                    1,
                    "PabloSLC",
                    "E23456789",
                    "Ubrique",
                    "España",
                    ["Educación", "Tecnológica", "Administración"],
                    "Cliente en crisis"
                    
                ),

                new Cliente(
                    1,
                    "MaríaSL",
                    "E23445789",
                    "Ubrique",
                    "España",
                    ["Deporte", "Electrónica", "Grandes Comercios"],
                    "Cliente muy solvente"
                    
                ),
            ];

    
    }

    public function contar() {
        
    }

    
}
?>