<?php 

class ArrayObjetosUsuarios{
    private $tabla;

    public function __construct(){
        $this->tabla = [];
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

    public function create(Usuario $usuario)
    {
        $this->tabla[] = $usuario;
    }

    public function delete($indice)
    {
        unset($this->tabla[$indice]);
    }

    public function update($indice, Usuario $usuario)
    {
        $this->tabla[$indice] = $usuario;
    }

    public function read($indice)
    {
        return $this->tabla[$indice];
    }

    public function ordenar($propiedad)
    {
        

    }

    public function filtrar($expresion)
    {
        
    }



}
