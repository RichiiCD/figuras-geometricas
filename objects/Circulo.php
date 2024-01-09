<?php

include '../objects/FiguraGeometrica.php';
include '../objects/PerimetroM.php';


class Circulo extends FiguraGeometrica implements PerimetroM {


    function __construct($radio) {
        $this->tipoFigura = "circulo";
        parent::__construct($radio);
    }

    
    # A = π * r * r
    function area() {
        return pi() * ($this->lado1 * $this->lado1);
    }


    # P = 2 * π * r 
    function perimetro() {
        return 2 * pi() * $this->lado1;
    }


    public function __toString() {
        return $this->tipoFigura;
    }
}
