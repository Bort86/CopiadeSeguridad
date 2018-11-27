<?php

require_once 'Product.class.php';

class Cosmetic extends Product {

    const TYPE = "ecológico";

    private $partecuerpo;
    private $aplicacion;
    private $reacciones;

    function __construct($codigo = NULL, $nombre = NULL, $descripcion = NULL, $precio = NULL, $partecuerpo = NULL, $aplicacion = NULL, $reacciones = NULL) {
        parent::__construct($codigo, $nombre, $descripcion, $precio);
        $this->partecuerpo = $partecuerpo;
        $this->aplicacion = $aplicacion;
        $this->reacciones = $reacciones;
    }

    public function __toString() {
        return parent::__toString() .
                sprintf("Salud: <br>"
                        . "Partecuerpo = %s <br>"
                        . "Aplicacion = %s <br>"
                        . "Reacciones = %s <br>"
                        , $this->partecuerpo, $this->aplicacion, $this->reacciones);
    }

    function getPartecuerpo() {
        return $this->partecuerpo;
    }

    function getAplicacion() {
        return $this->aplicacion;
    }

    function getReacciones() {
        return $this->reacciones;
    }

    function setPartecuerpo($partecuerpo) {
        $this->partecuerpo = $partecuerpo;
    }

    function setAplicacion($aplicacion) {
        $this->aplicacion = $aplicacion;
    }

    function setReacciones($reacciones) {
        $this->reacciones = $reacciones;
    }

}
