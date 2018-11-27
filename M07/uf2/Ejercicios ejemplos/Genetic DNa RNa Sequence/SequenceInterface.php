<?php


interface SequenceInterface {
    public function validate();
    public function transcription($id);
    public function countBases();
    
}
