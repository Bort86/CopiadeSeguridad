<?php

require_once 'SequenceInterface.php';

abstract class GeneticSequence implements SequenceInterface {

    private $id;
    private $elements;
    private $validValues;

    const BASE_T = "T";
    const BASE_U = "U";

    public function __construct($id = NULL, $elements = NULL, $validValues = NULL) {
        $this->id = $id;
        $this->elements = $elements;
        $this->validValues = $validValues;
    }

    public function __toString() {
        return sprintf("GeneticSequence: {id=%s; elements=%s; validValues=%s}", $this->id, $this->elements, $this->validValues);
    }

    abstract public function transcription($id);

    public function countBases() {

        $bases = array();

        for ($i = 0; $i < strlen($this->elements); $i++) {
            if (array_key_exists($this->elements[$i], $bases)) {
                $bases[$this->elements[$i]] ++;
            } else {
                $bases[$this->elements[$i]] = 1;
            }
        } return $bases;
    }

    public function validate() {
        return !preg_match("/[^$this->validValues]/i", $this->elements);
    }

    function getId() {
        return $this->id;
    }

    function getValidValues() {
        return $this->validValues;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValidValues($validValues) {
        $this->validValues = $validValues;
    }

    function getElements() {
        return $this->elements;
    }

    function setElements($elements) {
        $this->elements = $elements;
    }

}
