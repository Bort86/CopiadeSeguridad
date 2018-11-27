<?php

/**
 * function for first exercice
 * first we convert all the string to upper
 * then we make a for to read the string, and for each char,
 * we print it and we search it in the amino dicc
 * @param type $to_nucleotid
 */
function To_nucleotid($to_nucleotid) {
    $to_nucleotid = strtoupper($to_nucleotid);
    for ($indice = 0; $indice < strlen($to_nucleotid); $indice++) {
        echo $to_nucleotid[$indice] . " > " . Dicc_amino[$to_nucleotid[$indice]] . "\t";
    }
}

/**
 * function for second exercise; first we convert all the string
 *  to upper then we create an array with split to save all the codons,
 *  then we read the codon array and for each string in the array, we look
 * for the nucleotid dicc to print its 0 and 1 value in the associative array
 * @param type $nucleotido_base
 */
function To_amino($nucleotido_base) {

    $amino = strtoupper($nucleotido_base);
    $codones = str_split($amino, 3);
    $len_codon = sizeof($codones);
    for ($indice = 0; $indice < $len_codon; $indice++) {

        echo $codones[$indice] . " > " . Dicc_nucl[$codones[$indice]][0] . "<br>";
        echo Dicc_nucl[$codones[$indice]][0] . " = " . Dicc_nucl[$codones[$indice]][1] . "<br>";
    }
}

/**
 * function that vallidates through two another
 * functions wether if a string is null or not valid
 * @param type $campo_texto
 * @param type $patrón
 * @return boolean
 */
function Validate_total($campo_texto, $patrón) {
    if (Check_empty($campo_texto) == true && Validate_string($campo_texto, $patrón) == true) {
        return true;
    } return false;
}

/**
 * function that confirms if a string is null or not
 * @param type $campo_texto
 * @return boolean
 */
function Check_empty($campo_texto) {
    if ($campo_texto == NULL) {
        echo "Campo vacío, introduzca datos";
        return false;
    } return true;
}

/**
 * Function that confirms if a string has all the valid chars
 * informed in a regex' pattern
 * @param type $campo_texto
 * @param type $patrón
 * @return boolean
 */
function Validate_string($campo_texto, $patrón) {
    $contador = 0;
    $resultado = true;
    for ($indice = 0; $indice < strlen($campo_texto); $indice++) {
        if (preg_match($patrón, $campo_texto[$indice])) {
            $contador++;
        }
    }

    if ($contador > 0) {
        echo "Valor no admitido en patrón correcto de caractéres, vuelva a intentarlo";
        $resultado = false;
    }
    return $resultado;
}
