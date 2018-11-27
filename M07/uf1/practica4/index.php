<!DOCTYPE html>
<!--Shows both formularies -->

<?php
$DNA_base = NULL;
$DNA_comparar = NULL;
$RNA_user = NULL;
$answer_function1 = NULL;
/**
 * This two are the patterns to compare DNA and RNA
 */
$pattern_ADN="/[^atcg]/i";
$pattern_ARN="/[^aucg]/i";

if (filter_has_var(INPUT_POST, "comparar")) {
    $DNA_comparar = filter_input(INPUT_POST, "DNA_comparar");
    $DNA_base = filter_input(INPUT_POST, "DNA_base");
}

if (filter_has_var(INPUT_POST, "calcular")) {
    $RNA_user = filter_input(INPUT_POST, "RNA_user");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php require_once 'php/php.php'; ?>
    </head>


    <body>
        <fieldset>
            <!--
            Programa que compara dues seqüències DNA i informa quines 
            posicions no son coincidents.
            -->
            <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post">
                <fieldset>
                    <div>
                        <p>DNA DE BASE: </p>
                        <p><input type="text" name="DNA_base" value="<?= $DNA_base ?>"></p>
                        <p>DNA A COMPARAR: </p>
                        <p><input type="text" name="DNA_comparar" value="<?= $DNA_comparar ?>"></p>
                        <p><input type="submit" name="comparar" value="Comparar"/></p>
                    </div>
                    <div>
                        <?php
                        if (filter_has_var(INPUT_POST, "comparar")) {

                            if (validate_total($DNA_base,$pattern_ADN) && validate_total($DNA_comparar,$pattern_ADN)) {
                                $answer_function1=Function1($DNA_base, $DNA_comparar);
                                Print_answer1($answer_function1);
                                
                            }
                        }
                        ?>
                    </div>
                </fieldset>
            </form>
            
            <!--
            Programa que a partir d’una seqüència RNA calcula el número de vegades
            que apareix cada base nitrogenada.
            S’ha d’utilitzar un array associatiu.
            -->
            <form action="<?= HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="post">
                <fieldset>
                    <div>
                        <p> INTRODUCE A RNA CHAIN TO CALCULATE: </p>
                        <p><input type="text" name="RNA_user" value="<?= $RNA_user ?>"></p>
                        <p><input type="submit" name="calcular" value="Calculate"/></p>
                    </div>
                    <div>
                        <?php
                        if (filter_has_var(INPUT_POST, "calcular")){
                            if (validate_total($RNA_user, $pattern_ARN)) {
                                DNA_base_calculator($RNA_user);
                                //Print_contador($contador);
                            }
                        }
                       
                        ?>
                    </div>
                </fieldset>

            </form>
        </fieldset>

    </body>
</html>
