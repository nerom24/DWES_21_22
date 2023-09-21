<?php

class calculadora{
    private $valor1;
    private $valor2;
    private $resultado;

    function __construc($valor1=null, $valor2=null, $resultado=null){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->resultado = $resultado;
    }
    
    function getValor1()
    {
        return $this->valor1;
    }

    function getValor2()
    {
        return $this->valor2;
    }

    function getResultado()
    {
        return $this->resultado;
    }

    function setValor1($valor)
    {
        $this->valor1 = $valor;
    }

    function setValor2($valor)
    {
        $this->valor2 = $valor;
    }

    function setResultado($valor)
    {
        $this->resultado = $valor;
    }

    function suma()
    {
        $this->resultado =  $this->valor1 + $this->valor2;
        // (setResultado($this->valor1 + $this->valor2);
    }

    function resta()
    {
        $this->resultado =  $this->valor1 - $this->valor2;
    }

    function producto()
    {
        $this->resultado = $this->valor1 * $this->valor2;
    }

    function divide()
    {
        $this->resultado =  $this->valor1 / $this->valor2;
    }

    function potencia()
    {
        $this->resultado = pow( $this->valor1 , $this->valor2 );
    }
}

?>