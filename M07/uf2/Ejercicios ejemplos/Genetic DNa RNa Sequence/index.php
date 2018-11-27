<?php
require_once 'GeneticSequence.class.php';
require_once 'RnaSequence.class.php';
require_once 'DnaSequence.class.php';
require_once 'SequenceUtil.class.php';
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
        <title></title>
    </head>
    <body>

        <?php
        
        $objRnaSequence = new RnaSequence("SEQ2", "ACGUACtGUACGU");
        echo ($objRnaSequence->validate()) ? "<h1>VALID</h1>" : "<h1>InVALID</h1>";
        // if($objRnaSequence->validate(){echo TRUE;}else{echo FALSE;}
        echo "<br/><br/>";

        $objDnaSequence = new DnaSequence("SEQ1", "ATCGATCGATCG");
        echo $objDnaSequence->getId() . ": " . $objDnaSequence->getElements();
        echo "<br/><br/>";
        $objRnaSequence = $objDnaSequence->transcription("SEQ_RNA");
        echo $objRnaSequence;
        echo "<br/><br/>";

        $objRnaSequence = new RnaSequence("SEQ2", "ACGUACUUUUUGUACGU");
        echo $objRnaSequence->getId() . ": " . $objRnaSequence->getElements();
        echo "<br/><br/>";
        $objDnaSequencenew = $objRnaSequence->transcription("SEQ2");
        echo $objDnaSequencenew;
        echo "<br/><br/>";

        print_r($objDnaSequencenew->countBases());
        echo "<br/><br/>";
        
        echo SequenceUtil::generateRandomSequence($objDnaSequencenew::VALID_VALUES, 10);
        
        ?>
    </body>
</html>
