<?php
    define(ADENINE,  "a");
    define(CYTOSINE, "c");
    define(GUANINE,  "g");
    define(THYMINE,  "t");

    $text=NULL;
    $number=NULL;
    $email=NULL;
    $url=NULL;
    $hidden=NULL;
    $password=NULL;
    $date=NULL;
    $textarea=NULL;
    $select=NULL;
    $radio=NULL;
    $checkboxArray=NULL;
    
    $selectedA=NULL;
    $selectedC=NULL;
    $selectedG=NULL;
    $selectedT=NULL;
    $selectedDef=NULL;    

    $checkedRadA=NULL;
    $checkedRadC=NULL;
    $checkedRadG=NULL;
    $checkedRadT=NULL;

    $checkedBoxA=NULL;
    $checkedBoxC=NULL;
    $checkedBoxG=NULL;
    $checkedBoxT=NULL;
    
    if ((filter_has_var(INPUT_POST, 'n_submit'))) {
        $text=filter_input(INPUT_POST, 'n_text');
        $number=filter_input(INPUT_POST, 'n_number');
        $email=filter_input(INPUT_POST, 'n_email');
        $url=filter_input(INPUT_POST, 'n_url');
        $hidden=filter_input(INPUT_POST, 'n_hidden');
        $password=filter_input(INPUT_POST, 'n_password');
        $date=filter_input(INPUT_POST, 'n_date');
        $textarea=filter_input(INPUT_POST, 'n_textarea');

        $select=filter_input(INPUT_POST, 'n_select');
        switch ($select) {
            case ADENINE:
                $selectedA="selected";
                break;
            case CYTOSINE:
                $selectedC="selected";
                break;
            case GUANINE:
                $selectedG="selected";
                break;
            case THYMINE:
                $selectedT="selected";
                break;
            default:
                $selectedDef="selected";
        }
        
        $radio=filter_input(INPUT_POST, 'n_radio');
        switch ($radio) {
            case ADENINE:
                $checkedRadA="checked";
                break;
            case CYTOSINE:
                $checkedRadC="checked";
                break;
            case GUANINE:
                $checkedRadG="checked";
                break;
            case THYMINE:
                $checkedRadT="checked";
        }

        $checkboxArray=filter_input(INPUT_POST, 'n_checkbox', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
        
        if (isset($checkboxArray)) {
            foreach ($checkboxArray as $checkboxValue) {
                switch ($checkboxValue) {
                    case ADENINE:
                        $checkedBoxA="checked";
                        break;
                    case CYTOSINE:
                        $checkedBoxC="checked";
                        break;
                    case GUANINE:
                        $checkedBoxG="checked";
                        break;
                    case THYMINE:
                        $checkedBoxT="checked";
                }
            }
        }
    }
    else {
        $datetime=new DateTime();
        $date=$datetime->format('Y-m-d');        
    }
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>form</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <p>[<a href="index.php">back</a>]</p>

        <h1>form</h1>
        <!-- htmlspecialchars('form_result.php') -->
        <!-- htmlspecialchars($_SERVER['PHP_SELF']) -->
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>inputs</legend>

                <h2>text</h2>
                <label for="id_text">Input text:</label>
                <input type="text" id="id_text" name="n_text" value="<?=$text?>" placeholder="Input text"/>

                <h2>number</h2>
                <label for="id_number">Input number:</label>
                <input type="number" id="id_number" name="n_number" value="<?=$number?>"/>

                <h2>email</h2>
                <label for="id_email">Input email:</label>
                <input type="email" id="id_email" name="n_email" value="<?=$email?>"/>

                <h2>url</h2>
                <label for="id_url">Input url:</label>
                <input type="url" id="id_url" name="n_url" value="<?=$url?>"/>

                <h2>hidden</h2>
                <input type="hidden" id="id_hidden" name="n_hidden" value="hidden text"/>

                <h2>password</h2>
                <label for="id_password">Input password:</label>
                <input type="password" id="id_password" name="n_password" value="<?=$password?>"/>

                <h2>date</h2>
                <label for="id_date">Input date:</label>
                <input type="date" id="id_date" name="n_date" value="<?=$date?>"/>

                <h2>textarea</h2>
                <label for="id_textarea">Input text:</label>
                <textarea id="id_textarea" name="n_textarea"><?=$textarea?></textarea>

                <h2>select</h2>
                <label for="id_select">Select option:</label>
                <select id="id_select" name="n_select">
                    <option value="default" <?=$selectedDef?>>Default text</option>
                    <option value="a" <?=$selectedA?>>adenine</option>
                    <option value="c" <?=$selectedC?>>cytosine</option>
                    <option value="g" <?=$selectedG?>>guanine</option>
                    <option value="t" <?=$selectedT?>>thymine</option>
                </select>

                <h2>radio</h2>
                <label>Click option:</label>
                <input type="radio" id="id_radio1" name="n_radio" value="a" <?=$checkedRadA?>/>adenine
                <input type="radio" id="id_radio2" name="n_radio" value="c" <?=$checkedRadC?>/>cytosine
                <input type="radio" id="id_radio3" name="n_radio" value="g" <?=$checkedRadG?>/>guanine
                <input type="radio" id="id_radio4" name="n_radio" value="t" <?=$checkedRadT?>/>thymine

                <h2>checkbox</h2>
                <label>Click multiple options:</label>
                <input type="checkbox" id="id_checkbox1" name="n_checkbox[]" value="a" <?=$checkedBoxA?>/>adenine
                <input type="checkbox" id="id_checkbox2" name="n_checkbox[]" value="c" <?=$checkedBoxC?>/>cytosine
                <input type="checkbox" id="id_checkbox3" name="n_checkbox[]" value="g" <?=$checkedBoxG?>/>guanine
                <input type="checkbox" id="id_checkbox4" name="n_checkbox[]" value="t" <?=$checkedBoxT?>/>thymine
            </fieldset>
            <fieldset>
                <legend>buttons</legend>

                <h2>submit</h2>
                <input type="submit" id="id_submit1" name="n_submit" value="SUBMIT"/>
                <button type="submit" id="id_submit2" name="n_submit" value="SUBMIT">SUBMIT</button>

                <h2>reset</h2>
                <input type="reset" id="id_reset1" name="n_reset" value="RESET"/>
                <button type="reset" id="id_reset2" name="n_reset" value="RESET">RESET</button>

                <h2>button</h2>
                <input type="button" id="id_button" name="n_button" value="BUTTON" onclick="alert('javascript');"/>
            </fieldset>
        </form>
        <?php
            if ((filter_has_var(INPUT_POST, 'n_submit'))) {
        ?>
        <div>
            <p><?=var_dump($_POST)?></p>
            <p><?=print_r($_POST)?></p>

            <h1>form result</h1>

            <h2>text</h2>
            <p><?=$text?></p>

            <h2>number</h2>
            <p><?=$number?></p>

            <h2>email</h2>
            <p><?=$email?></p>

            <h2>url</h2>
            <p><?=$url?></p>

            <h2>hidden</h2>
            <p><?=$hidden?></p>

            <h2>password</h2>
            <p><?=$password?></p>

            <h2>date</h2>
            <p><?=$date?></p>

            <h2>textarea</h2>
            <p><?=$textarea?></p>            
            
            <h2>select</h2>
            <p><?=$select?></p>

            <h2>radio</h2>
            <p><?=$radio?></p>

            <h2>checkbox</h2>
            <p><?=print_r($checkboxArray)?></p>
        <?php
            }
        ?>
        </div>
    </body>
</html>