<?php

// Functions for part 1----------------------------------------------

/**
 * Function that converts a string to upper and returs its inverse
 * @param type $String_toInvert
 * @return type string
 */
function invert_String($String_toInvert) {
    $resultado = strrev($String_toInvert);
    return strtoupper($resultado);
}

/**
 * Function for printing the results of exercice 1 in a table
 * @param type $string_camp
 * @param type $results
 */

function print_results1($string_camp, $results) {
    echo "<table border=1>";
    echo "<tr>";
    echo "<td> $string_camp </td>";
    echo "<td>  >  </td>";
    echo "<td> $results </td>";
    echo "</tr>";
    echo "</table>";
}

// Functions for part 2 -----------------------------------------------------

/**
 * Function that counts how many nitrogen bases has a string.
 * We declare an empty array, then we start reading the string indtroduced by user
 * If each char doesn't appear in results array as a key, we assign it with a 
 * count = 1; if the key already exists, we raise its value by one
 * I had to create a new string to storage the possible key because 
 * i couldn't make $results[$campo_texto[$indice]] be read as a key
 * @param type string
 * @return associative array
 */
function Analizer_a($campo_texto) {
    $results = array();
    $key_s = "";
    for ($indice = 0; $indice < strlen($campo_texto); $indice++) {
        $key_s = $campo_texto[$indice];
        if (array_key_exists("$key_s", $results)) {
            $results[$campo_texto[$indice]] += 1;
        } else {
            $results[$campo_texto[$indice]] = 1;
        }
    } return $results;
}

/**
 * Function for printing results for exercice 2
 * @param type $results
 * @param type $string_camp
 */
function print_results2($results, $string_camp) {
    foreach ($results as $clave => $valor) {
        echo "<table border=1>";
        echo "<tr>";
        echo "<td> <b> $clave </b>  </td>";
        echo "<td>$valor</td>";
        echo "</tr>";
        echo "</table>";
    }
    echo "<br>";
    echo "<br>";
    foreach ($results as $clave => $valor) {
        echo "<table border=1>";
        echo "<tr>";
        echo "<td> <b> $clave </b>  </td>";
        echo "<td>".($valor*100) / (strlen($string_camp))." % </td>";
        echo "</tr>";
        echo "</table>";
    }
    
    
}

// Functions to validate inputs------------------------------------------------


/**
 * Function that validates if an introduced string has a right pattern
 * the pattern is instroduced by the user (dna or rna)
 * The error is saved in a session array variable
 * @param type $string_camp string
 * @param type $pattern regex
 * @return boolean
 */

function validate_bases($string_camp, $pattern) {

    for ($indice = 0; $indice < strlen($string_camp); $indice++) {
        if (preg_match($pattern, $string_camp[$indice])) {
            $_SESSION["errors"][] = "Wrong nitrogen bases, please, insert correct ones";
            return false;
        }
    }
    return true;
}

/**
 * Function that checks if a string is empty
 * It saves the result in a session array too
 * @param type string
 * @return boolean false for empty
 */
function check_empty($string_camp) {

    if ($string_camp == NULL) {
        $_SESSION["errors"][] = "Text field empty, please introduce something";
        return false;
    } return true;
}

/**
 * Function that uses both error functions to check if a string is empty and
 * if it contains the right nitrogen bases
 * @param type $string_toCheck
 * @param type $pattern
 * @return boolean
 */
function check_errors($string_toCheck, $pattern) {
    if (!check_empty($string_toCheck) || !validate_bases($string_toCheck, $pattern)) {
        return false;
    }
    return true;
}

/**
 * Function that print the session array
 */
function print_errors() {
    foreach ($_SESSION["errors"] as $errors_p) {
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>Error </td>";
        echo "<td>$errors_p</td>";
        echo "</tr>";
        echo "</table>";
    }
}
