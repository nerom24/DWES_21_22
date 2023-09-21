<?php  
	class calculadora{

		private $valor1;
		private $valor2;
		private $resultado;

		public function __construct(){
			$this->valor1=null;
			$this->valor2=null;
			$this->resultado=null;
		}

	
    /**
     * @return mixed
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * @param mixed $valor1
     *
     * @return self
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * @param mixed $valor2
     *
     * @return self
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param mixed $resultado
     *
     * @return self
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

    }

    public function suma(){
    	$this->resultado = $this->valor1 + $this->valor2;
    }

    public function resta(){
    	$this->resultado = $this->valor1 - $this->valor2;
    }

    public function multiplicacion(){
    	$this->resultado = $this->valor1 * $this->valor2;
    }

    public function division(){
    	if ($this->valor2 == 0) {
    		$this->resultado = "No se puede dividir entre 0.";
    	} else {
    		$this->resultado = $this->valor1 / $this->valor2;
    	}
    }

    public function potencia(){
    	$this->resultado = $this->valor1 ** $this->valor2;
    }
}
?>