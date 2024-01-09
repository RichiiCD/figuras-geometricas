<?php

include '../objects/FiguraGeometrica.php';
include '../objects/PerimetroM.php';


class Cuadrado extends FiguraGeometrica implements PerimetroM {


    function __construct($lado1) {
        $this->tipoFigura = "cuadrado";
        parent::__construct($lado1);
    }

    
    # A = L * L
    function area() {
        return $this->lado1 * $this->lado1;
    }


    # P = 2 * (L + L)
    function perimetro() {
        return ($this->lado1 + $this->lado1) * 2;
    }


    public function __toString() {
        return $this->tipoFigura;
    }
}
