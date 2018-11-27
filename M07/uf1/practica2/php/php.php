<?php

/**
 * Function that will convert temperature
 * @param int $temperatura
 * @param int $conversor being 1 for Celsius
 * and 2 for Farenheit
 */
function Convertir(int $temperatura, int $conversor) {
    if (Is_temp_num($temperatura)) {
        $opcion = NULL;
        $resultado = 0;

        if ($conversor === 2) {
            $opcion = "Farenheit";
            $resultado = 1.8 * $temperatura + 32;
        }
        if ($conversor === 1) {
            $opcion = "Celsius";
            $resultado = ($temperatura - 32) / 1.8;
        }

        echo "<table border=1>";
        echo "<tr>";
        echo "<td> Has introducido la temperatura </td>";
        echo "<td>$temperatura</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> Has introducido la opción </td>";
        echo "<td>$opcion</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> Has introducido la temperatura </td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
        echo "</table>";
    }
}

/**
 * Function that will check if temperature is null or not a number
 * if it's not, will print a message error
 * @param type $temperatura
 * @return bool
 */
function Is_temp_num($temperatura): bool {
    $respuesta = TRUE;
    if ($temperatura == NULL) {
        echo "La temperatura introducida está vacía";
        $respuesta = FALSE;
    }
    if (is_numeric($temperatura) == FALSE) {
        echo "La temperatura introducida no es un número";
        $respuesta = FALSE;
    }
    return $respuesta;
}

?>
