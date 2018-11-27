<?php

require_once 'ClassInterface.php';

class Servicio implements ClassInterface {

    private $codigo;
    private $nombre;
    private $edificio;
    private $planta;

    function __construct($codigo=NULL, $nombre=NULL, $edificio=NULL, $planta=NULL) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->edificio = $edificio;
        $this->planta = $planta;
    }
    
    public function __toString() {
        return sprintf("Servicio: <br>"
                . "codigo = %s <br>"
                . "nombre = %s <br>"
                . "edificio = %s <br>"
                . "planta = %.2f <br>", $this->codigo, $this->nombre, $this->edificio, $this->planta);
    }
    
    public function encontrar($codigo){
        
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEdificio() {
        return $this->edificio;
    }

    function getPlanta() {
        return $this->planta;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdificio($edificio) {
        $this->edificio = $edificio;
    }

    function setPlanta($planta) {
        $this->planta = $planta;
    }



}
