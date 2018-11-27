<?php

/**
 * Function that compares 2 strings given by user
 * @param type $DNA_base 1º operand
 * @param type $DNA_comparar 2º operand
 * @return  chars that are not equal, and their position in the string
 */
function Function1($DNA_base, $DNA_comparar) {

    $resultado = array();
    $Bigger_DNA = Compare_Strings($DNA_base, $DNA_comparar);


    for ($indice = 0; $indice < strlen($Bigger_DNA); $indice++) {


        if ($DNA_base[$indice] != $DNA_comparar[$indice]) {
            $resultado[] = $indice + 1;
        }
    }
    return $resultado;
}

function Print_answer1($answer_function1) {
    if (empty($answer_function1)) {
        echo "No hay diferencias entre las cadenas";
    } else {
       
        echo "<table border='4' class='stats' cellspacing='0'>
            <tr><th>RESULTS</th></tr>";
        
        for ($indice = 0; $indice < count($answer_function1); $indice++) {
            echo "<tr>Posición " . $answer_function1[$indice] . " no es correcta</tr>";
        }
    }
}

/**
 * Function that compare two strings and returns the bigger one
 * If bth are equals, returns the firs one
 * @param type $campo_texto1
 * @param type $campo_texto2
 * @return type string 
 */
function Compare_Strings($campo_texto1, $campo_texto2) {
    $Campo_Grande = "";

    if ($campo_texto1 >= $campo_texto2) {
        $Campo_Grande = $campo_texto1;
    } else {
        $Campo_Grande = $campo_texto2;
    }
    return $Campo_Grande;
}

/**
 * functino that counts how many bases has an RNA string
 * @param type $RNA string given by user
 * @return calls a function to print an associative array with the results
 */
function DNA_base_calculator($RNA) {
    $RNA = strtoupper($RNA);
    $constante_RNA = "AUCG";
    $resultado = array();
    for ($indice = 0; $indice < strlen($constante_RNA); $indice++) {
        $resultado[$constante_RNA[$indice]] = 0;
    }
    for ($indice = 0; $indice < strlen($RNA); $indice++) {
        $resultado[$RNA[$indice]] ++;
    }

    foreach ($resultado as $x => $x_value) {
        echo $x . " == " . $x_value . "<br>";
    }
}

/**
 * function that prints an associative array given by another function
 * @param type $contador the associative array with the rNa bases and its counters
 * @return an echo message coded in a table
 */
function Print_contador($contador) {
    echo "<table border=1>";
    echo "<tr>";
    echo "<td> Base A </td>";
    echo "<td>{$contador['A']}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Base U </td>";
    echo "<td>{$contador['U']}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Base G </td>";
    echo "<td>{$contador['G']}</td>";
    echo "</tr>";
    echo "<td> Base C </td>";
    echo "<td>{$contador['C']}</td>";
    echo "</tr>";
    echo "</table>";
}

/**
 * function to do validations
 * it confirms wether the introduced dna or rna string is empty and if it has its
 * right bases
 * @param type $DNA a string to validate
 * @param type $pattern defined before, a regex to do a preg_match
 * @return boolean true if its everthing ok and false if it's not
 */
function validate_total($DNA, $pattern) {
    if (check_empty($DNA) == true && validate_adn($DNA, $pattern) == true) {
        return true;
    } return false;
}

/**
 * function to confirm if a string is empty
 * @param type $DNA
 * @return boolean true if its not empy and false if its empty, also prints 
 * an error message
 */
function check_empty($DNA) {
    if ($DNA == NULL) {
        echo "Campo  vacío";
        return false;
    } return true;
}

/**
 * function that validates if a nucleotid acid string has its right bases
 * @param type $DNA a string for DNA or RNA
 * @param type $pattern constats defined before, regex to do a preg-match
 * @return boolean true if its right or false if its not a DNA or RNA;
 * and also prints an echo message with an error
 */
function validate_adn($DNA, $pattern) {
    $contador = 0;
    $resultado = true;
    for ($indice = 0; $indice < strlen($DNA); $indice++) {
        if (preg_match($pattern, $DNA[$indice])) {
            $contador++;
        }
    }

    if ($contador > 0) {
        echo "Non-ADN or ARN base introduced";
        $resultado = false;
    }
    return $resultado;
}

/**
 * contar($valoresaceptados)
 * 
 * inicias el array $result a cero con las llaves usando los valores aceptados:
 * 
 * * for $i=0
 * 
 * $result[$valor[i]] =0;
 */