<!DOCTYPE html>
<!--
Programa que a partir d’una seqüència d’aminoàcids d’una proteïna calcula la seqüència de nucleòtids.
-->
<?php
$amino_base = NULL;
$nucleotido_base = NULL;
const Amino = "/[^flimvsptayhqnkdecwrsg]/i";
const Nucleotid = "/[^ucag]/i";
const Dicc_amino = array("F" => "UUU", "L" => "UUA", "I" => "AUU", "M" => "AUG", "V" => "GUU", "S" => "UCU", "P" => "CCU", "T" => "ACU", "A" => "GCU", "Y" => "UAU", "H" => "CAU", "Q" => "CAA", "N" => "AAU", "K" => "AAA", "D" => "GAU", "E" => "GAA", "C" => "UGU", "W" => "UGC", "R" => "CGU", "S" => "AGU", "G" => "GGU");
const Dicc_nucl = ["ACU" => array("T", "Treonina"), "GAU" => array("D", "Ácido Aspártico"), "GDU" => array("R", "Arginina"), "UAU" => array("Y", "Tirosina"), "AAU" => array("N", "Asparagina")];

if (filter_has_var(INPUT_POST, "to_nucleotid")) {
    $amino_base = filter_input(INPUT_POST, "amino_base");
}

if (filter_has_var(INPUT_POST, "to_aminoacid")) {
    $nucleotido_base = filter_input(INPUT_POST, "nucleotido");
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <title>Práctica 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'php/php.php'; ?>
    </head>
    <body> <div >
            <fieldset>
                <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="jumbotron">
                            <p>Introduzca la secuencia de aminoácidos: </p>
                            <p><input type="text" name="amino_base" value="<?= $amino_base ?>"></p>
                            <p><input type="submit" name="to_nucleotid" value="Convertir a nucleótidos"></p>
                        </div>
                        <div class="jumbotron">
                            <?php
                            if (filter_has_var(INPUT_POST, "to_nucleotid")) {
                                if (Validate_total($amino_base, Amino)) {
                                    To_nucleotid($amino_base);
                                }
                            }
                            ?>
                        </div>

                    </fieldset>
                </form>
            </fieldset>
            <fieldset>
                <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="jumbotron">
                            <p>Introduzca la secuencia de nucleótidos</p>
                            <p><input type="text" name="nucleotido" value="<?= $nucleotido_base ?>"></p>
                            <p><input type="submit" name="to_aminoacid" value="Convertir a aminoácidos"></p>
                        </div>
                        <div class="jumbotron">
                            <?php
                            if (filter_has_var(INPUT_POST, "to_aminoacid")) {
                                if (Validate_total($nucleotido_base, Nucleotid)) {
                                    To_amino($nucleotido_base);
                                }
                            }
                            ?>
                        </div>

                    </fieldset>
                </form>
            </fieldset>
        </div>
    </body>
</html>
