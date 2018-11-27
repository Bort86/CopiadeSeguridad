<?php

require_once 'GeneticSequence.class.php';

class RnaSequence extends GeneticSequence {

    const VALID_VALUES = 'AUCG';
    const TYPE = 'RNA';

    public function __construct($id = NULL, $elements = NULL) {
        parent::__construct($id, $elements, self::VALID_VALUES);
    }

    public function __toString() {
        return sprintf("%s; type=%s; valid_values=%s}",
                parent::__toString(),
                self::TYPE,
                parent::getValidValues());
    }
    
    public function transcription($id) {
        $elements = str_replace(parent::BASE_U, parent::BASE_T, parent::getElements());
        $objDnaSequence = new DnaSequence($id, $elements);

        return $objDnaSequence;
    }

}
