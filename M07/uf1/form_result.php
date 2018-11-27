<?php
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
        $radio=filter_input(INPUT_POST, 'n_radio');
        $checkboxArray=filter_input(INPUT_POST, 'n_checkbox', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>form result</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <p>[<a href="form.php">back</a>]</p>

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
    </body>
</html>