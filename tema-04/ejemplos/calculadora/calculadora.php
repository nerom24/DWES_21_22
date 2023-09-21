<?php

class Calculadora {

    private $numero1;
    private $numero2;

    function __construct() {
    	$this->numero1 = null;
    	$this->numero2 = null;
    }
    
    public function getNumero1() {
        return $this->numero1;
    }

    public function getNumero2() {
        return $this->numero2;
    }

    public function setNumero1($numero1) {
        $this->numero1 = (float) $numero1;
    }

    public function setNumero2($numero2) {
        $this->numero2 = (float) $numero2;
    }

    public function Sumar() {
        echo $this->getNumero1() . " + " . $this->getNumero2() . " = ";
        echo $total = $this->getNumero1() + $this->getNumero2(); 
    }

    public function Restar() {
        echo $this->getNumero1() . " - " . $this->getNumero2() . " = ";
        echo $total = $this->getNumero1() - $this->getNumero2();
    }

    public function Multiplicar() {
        echo $this->getNumero1() . " x " . $this->getNumero2() . " = ";
        echo $total = $this->getNumero1() * $this->getNumero2();
    }

    public function Dividir() {
        if ($this->getNumero2() == 0) {
            echo 'No se puede dividir entre cero';
        } else {
            echo $this->getNumero1() . " / " . $this->getNumero2() . " = ";
            echo $total = $this->getNumero1() / $this->getNumero2();
        }
    }

}