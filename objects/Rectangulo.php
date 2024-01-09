<?php

include '../objects/FiguraGeometrica.php';
include '../objects/PerimetroM.php';


class Rectangulo extends FiguraGeometrica implements PerimetroM {
    public $lado2;


    function __construct($lado1, $lado2) {
        $this->lado2 = $lado2;
        $this->tipoFigura = "rectangulo";
        parent::__construct($lado1);
    }


    function get_lado2() {
        return $this->lado2;
    }


    function set_lado2($lado2) {
        $this->lado2 = $lado2;
    }
    
    
    # A = L * L
    function area() {
        return $this->lado1 * $this->lado2;
    }


    # P = 2 * (L + L)
    function perimetro() {
        return ($this->lado1 + $this->lado2) * 2;
    }

    
    public function __toString() {
        return $this->tipoFigura;
    }
}
