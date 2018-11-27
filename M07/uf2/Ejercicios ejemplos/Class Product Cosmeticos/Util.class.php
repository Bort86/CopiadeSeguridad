<?php

class Util {

    public static function printar(array $list) {
        echo "<ul>";
        foreach ($list as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul>";
    }

    public static function encontrarTra(array $list, String $codigo) {
        foreach ($list as $element) {
            if ($element->encontrar($codigo)) {
                return $element;
            }
        } echo "Este tratamiento no existe";
    }

}
