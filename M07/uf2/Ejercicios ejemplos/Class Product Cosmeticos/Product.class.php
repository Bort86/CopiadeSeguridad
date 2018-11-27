<?php

require_once 'ClassInterface.php';

class Product implements ClassInterface {

    private $codigo;
    private $nombre;
    private $descripcion;
    private $precio;

    //constructor
    function __construct($codigo = NULL, $nombre = NULL, $descripcion = NULL, $precio = NULL) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    //método toString

    public function __toString() {
        return sprintf("Producto: <br>"
                . "codigo = %s <br>"
                . "nombre = %s <br>"
                . "descripcion = %s <br>"
                . "precio = %.2f <br>", $this->codigo, $this->nombre, $this->descripcion, $this->precio);
    }

    public function encontrar($codigo){
        if ($codigo == $this->codigo){
            echo "bien";
            return true;
        } else {
            return false;
        }
    }
//    //método propio
//    abstract public function buscar();
//
//    //métodos de la interface que no desarrollaremos
//    abstract public function insertar();
//
//    abstract public function modificar();
//
//    abstract public function eliminar();

    //getters n setters

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

}
