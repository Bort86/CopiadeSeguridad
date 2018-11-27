<?php

require_once 'Product.class.php';

class Salud extends Product {

    const TYPE = 'Human';

    private $enfermedad;
    private $dosis;
    private $riesgo;

    public function __construct($codigo = NULL, $nombre = NULL, $descripcion = NULL, $precio = NULL, $enfermedad = NULL, $dosis = NULL, $riesgo = NULL) {
        parent::__construct($codigo, $nombre, $descripcion, $precio);
        $this->enfermedad = $enfermedad;
        $this->dosis = $dosis;
        $this->riesgo = $riesgo;
    }

    public function __toString() {
        return parent::__toString() .
                sprintf("Salud: <br>"
                        . "Enfermedad = %s <br>"
                        . "Dosis = %s <br>"
                        . "Riesgo = %s <br>"
                        , $this->enfermedad, $this->dosis, $this->riesgo);
    }

    //setters n getters
    function getEnfermedad() {
        return $this->enfermedad;
    }

    function getDosis() {
        return $this->dosis;
    }

    function getRiesgo() {
        return $this->riesgo;
    }

    function setEnfermedad($enfermedad) {
        $this->enfermedad = $enfermedad;
    }

    function setDosis($dosis) {
        $this->dosis = $dosis;
    }

    function setRiesgo($riesgo) {
        $this->riesgo = $riesgo;
    }

}
