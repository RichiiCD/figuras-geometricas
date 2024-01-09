<?php

include '../objects/FiguraGeometrica.php';
include '../objects/PerimetroM.php';


class Triangulo extends FiguraGeometrica implements PerimetroM {
    public $lado2;


    function __construct($base, $altura) {
        $this->lado2 = $base;
        $this->tipoFigura = "triangulo";
        parent::__construct($altura);
    }


    function get_lado2() {
        return $this->lado2;
    }


    function set_lado2($lado2) {
        $this->lado2 = $lado2;
    }
    
    
    # A = L * L / 2
    function area() {
        return ($this->lado1 * $this->lado2) / 2;
    }


    # P = 2 x L + B
    function perimetro() {
        return (2 * $this->lado1) + $this->lado2;
    }
}