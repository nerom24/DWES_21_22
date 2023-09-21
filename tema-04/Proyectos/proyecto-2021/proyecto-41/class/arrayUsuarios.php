<?php  
	class arrayUsuarios{

        private $tabla;

    public function __construct(
        $tabla = null
    ) {
        $this->tabla = [];
    }

    public static function perfiles() {
        $perfiles = [
            "Administrador",
            "Programador",
            "Editor",
            "Usuario",
            "Registrado",
        ];

        return $perfiles;
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

    public function create(Usuario $usuario) {
        $this->tabla[] = $usuario;
    }

    public function read($indice) {
        return $this->tabla[$indice];
    }

    public function delete($indice) {
        unset($this->tabla[$indice]);
        array_values($this->tabla);
    }

    public function update(Usuario $usuario, $indice) {
        $tabla[$indice] = $usuario;
    }

    public function ordenar() {}

    public function filtrar() {}
    
}
?>