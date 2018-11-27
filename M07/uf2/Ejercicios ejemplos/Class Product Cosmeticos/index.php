<?php
    require_once 'Product.class.php';
    require_once 'Salud.class.php';
    require_once 'Cosmetic.class.php';
    require_once 'Util.class.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de Herencias</title>
    </head>
    <body>
        <?php

        $array_p = array();

        array_push ($array_p, new Product("01", "Guacamole", "Es una fruta", 23.56));
        array_push ($array_p, new Salud("02", "No es Guacamole", "No es una fruta", 23.56));
        array_push ($array_p, new Cosmetic("03", "Guacamole", "Es una fruta", 23.56));
        array_push ($array_p, new Cosmetic("04", "No es Guacamole", "No es una fruta", 23.56));
        
        Util::printar($array_p);
              
        $string=Util::encontrarTra($array_p, "01");
        echo $string;
        
        ?>
    </body>
</html>
