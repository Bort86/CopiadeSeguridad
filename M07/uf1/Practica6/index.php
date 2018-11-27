<?php
require_once 'php/functions.php';

session_start();

define("pattern_ADN", "/[^atcg]/i");
define("pattern_ARN", "/[^aucg]/i");

$base_seq1 = NULL;
$base_seq2 = NULL;
$select = NULL;
$selectedRNA = NULL;
$selectedDNA = NULL;
$resultado1 = NULL;

$radioDNA = NULL;
$radioRNA = NULL;
$resultado2 = NULL;
$radioboton = NULL;

if (filter_has_var(INPUT_POST, "submit1")) {
    $base_seq1 = filter_input(INPUT_POST, "base_seq1");

    $select = filter_input(INPUT_POST, "n_select");
    switch ($select) {
        case "r":
            $selectedRNA = "selected";
            break;
        case "d":
            $selectedDNA = "selected";
            break;
    }
}

if (filter_has_var(INPUT_POST, "submit2")) {
    $base_seq2 = filter_input(INPUT_POST, "base_seq2");
    $radioboton = filter_input(INPUT_POST, "porcentaje");
}
$radioboton = filter_input(INPUT_POST, "porcentaje");
switch ($radioboton) {
    case "dna":
        $radioDNA = "checked";
        break;
    case "rna":
        $radioRNA = "checked";
        break;
}
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <title>PRÁCTICA 6</title>

    </head>
    <body>
        <fieldset>
            <!-- Programa que a partir d’una seqüència DNA codificada de 5’ a 3’ 
            calcula la seqüència RNA i viceversa (cDNA). -->
            <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post">
                <div class="jumbotron">
                    <p>IMPUT SEQUENCE TO CONVERT: </p>
                    <p><input type="text" name="base_seq1" value="<?= $base_seq1 ?>"> </p>
                    <p>Select option:</p>
                    <p><select id="id_select" name="n_select">
                            <option value="r" <?= $selectedRNA ?>>RNA</option>
                            <option value="d" <?= $selectedDNA ?>>DNA</option>
                        </select>
                    </p>
                    <p><button type="submit" id="id_submit1" name="submit1" value="CONVERT"> CONVERT</button></p>
                </div>
                
                <div>
                    <?php
                    if (filter_has_var(INPUT_POST, "submit1")) {
                        switch ($select) {
                            case "r":
                                if (check_errors($base_seq1, pattern_ARN)) {
                                    $resultado1 = invert_String($base_seq1);
                                    print_results1($base_seq1, $resultado1);
                                } else {
                                    print_errors();
                                }
                                break;

                            case "d":
                                if (check_errors($base_seq1, pattern_ADN)) {
                                    $resultado1 = invert_String($base_seq1);
                                    print_results1($base_seq1, $resultado1);
                                } else {
                                    print_errors();
                                }
                                break;
                        }
                    }
                    ?>
                </div>
            </form>
        </fieldset>
        <fieldset>
            <!--Programa que a partir d’una seqüència DNA o RNA calcula el número de 
            vegades que apareix cada base nitrogenada i el seu percentatge. -->
            <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post">
                <div class="jumbotron">
                    <p>IMPUT SEQUENCE TO ANALIZE: </p>
                    <p><input type="text" name="base_seq2" value="<?= $base_seq2 ?>"> </p>
                    <p><input type="radio" name="porcentaje" value="dna"<?= $radioDNA ?> />DNA</p>
                    <p><input type="radio" name="porcentaje" value="rna"<?= $radioRNA ?> />RNA</p>
                    <p><input type="submit" id="id_submit2" name="submit2" value="Analize"/></p>
                </div>
                

                <div>
                    <?php
                    if (filter_has_var(INPUT_POST, "submit2")) {
                        switch ($radioboton) {
                            case "rna":
                                if (check_errors($base_seq2, pattern_ARN)) {
                                    $resultado2 = Analizer_a($base_seq2);
                                    print_results2($resultado2, $base_seq2);
                                } else {
                                    print_errors();
                                }
                                break;

                            case "dna":
                                if (check_errors($base_seq2, pattern_ADN)) {
                                    $resultado2 = Analizer_a($base_seq2);
                                    print_results2($resultado2, $base_seq2);
                                } else {
                                    print_errors();
                                }
                                break;
                        }
                    }
                    ?>
                </div>

            </form>
        </fieldset>
    </body>
</html>

