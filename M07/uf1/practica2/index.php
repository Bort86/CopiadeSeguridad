<!DOCTYPE html>
<!--
Realitzeu el programa de la pràctica tenint en compte les valoracions següents:

Introduïu les dades d’entrada mitjançant un formulari.
Mostreu les dades d’entrada, de sortida i resultats mitjançant taules a la
mateixa pàgina del formulari.
Valideu les dades d’entrada al servidor.
Controleu i tracteu els possibles errors.
Proveu el funcionament amb dades/casos vàlids i invàlids.
Estructureu i moduleu el codi amb l’ús adient de funcions, constants, 
NO hard code...
Assigneu correctament les responsabilitats a les diferents funcions. Modular 
correctament una funció no ho ha de fer tot.
Identeu i comenteu el codi intern (sobretot les funcions).

Programa que calcula el canvi d'unitats entre graus Celsius/Farenheit i 
viceversa.  S’ha d’utilitzar un radio button o select.
-->
<?php
$temperatura = NULL;
$radioCelsius = NULL;
$radioFarenheit = NULL;
$conversor = NULL;

if (filter_has_var(INPUT_POST, "convertir")) {
    $temperatura = filter_input(INPUT_POST, "temperatura");
    $conversor = filter_input(INPUT_POST, "conversor");
}

$conversor = filter_input(INPUT_POST, "conversor");
switch ($conversor) {
    case "1":
        $radioCelsius = "checked";
        break;
    case "2":
        $radioFarenheit = "checked";
        break;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 2</title>
        <?php
        require_once 'php/php.php';
        ?>
    </head>
    <body>
        <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <div>
                <p> Introduzca la temperatura</p>
                <p><input type="text" name="temperatura" value="<?= $temperatura ?>"/></p>
                <p>Elija en qué quiere convertirlo</p>
                <p>Celsius <input type="radio" name="conversor" value="1"<?= $radioCelsius ?>/></p>
                <p>Farenheit <input type="radio" name="conversor" value="2"<?= $radioFarenheit ?>/></p>
            </div>
            <p><input type="submit" name="convertir" value="Convertir"/></p>

            <div id="div_resultados">
                <?php
                
                    Convertir($temperatura, $conversor);
                
                ?>

            </div>
        </form>

    </body>
</html>
