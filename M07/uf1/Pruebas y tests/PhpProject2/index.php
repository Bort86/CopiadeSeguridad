<?php

$name=null;
$age=null;
$pass=null;

if (filter_has_var(INPUT_POST, "send")) {
    $name = filter_input(INPUT_POST, "name");
    $age = filter_input(INPUT_POST, "age"); 
    $pass = filter_input(INPUT_POST, "contra");
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo formulario</title>
        <<link rel="stylesheet" href="css.css"/>
    </head>

    <body>

        <h1>Formulario</h1>
        <form action= "<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Datos de entrada</legend>
                <label>Input name: </label>
                <input type="text" name="name" value="<?=$name?>" /> <br>

                <label> Input edad: </label>
                <input type="number" step="10" name="age" value="<?=$age?>" />
            </fieldset>
            
            <fieldset> 
                <label>Introduce tu contraseña: </label>
                <input type="password" name="contra" value="<?=$pass?>" /> <br>
            </fieldset>
            
            <fieldset>
                <label> Choose your mood</label>
                <input type="radio" id="id_radio1" name="radio1" value="a" checked> Blue <br>
                <input type="radio" id="id_radio2" name="radio1" value="b"> Black <br>
                <input type="radio" id="id_radio3" name="radio1" value="c"> Red <br>
            </fieldset>

            <fieldset>
                <input type="hidden" name="secreto" value="Default text hidden" />
            </fieldset>
            
            <label for="id_select">Select option</label>
            <select id="id_select" name="n_select">
                <option value="default" selected>1</option>
                <option value="a" selected>2</option>
                <option value="b" selected>3</option>
            </select>
            
            <fieldset>
                <legend>Botones</legend>
                <input type="submit" name="send" value="Enviar" />
                <input type="reset" name="delete" value="Borrar botón" />               
            </fieldset> 
        </form>
<?php

echo "<p>$name</p>";
echo "<p>$age</p>";
echo "<p>$pass</p>";


?>
    </body>

</html>
