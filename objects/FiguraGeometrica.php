<?php


abstract class FiguraGeometrica {
    public $tipoFigura;
    public $lado1;


    function __construct($lado1) {
        $this->lado1 = $lado1;
    }


    function get_lado1() {
        return $this->lado1;
    }


    function set_lado1($lado1) {
        $this->lado1 = $lado1;
    }


    abstract function area();
}
