<?php

$name=filter_input(INPUT_POST, "name");
$age=filter_input(INPUT_POST, "age");

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo formulario</title>
    </head>
    <body>
        
         <h1>Formulario 12</h1>
         <form action="m07uf1.php" method="post" enctype="multipart/form-data">
            
                <legend>Datos de entrada</legend>
                <label>Input name: </label>
                <input type="text" name="name" value="<?php echo $name ?>" />
                 <label> Input edad: </label>
                 <input type="number" name="age" value="<?php echo $age ?>" />
             
                <legend>Botones</legend>
                <input type="submit" name="send" value="Enviar" />
                <input type="reset" name="delete" value="Borrar botón" />
         
                <button type="submit" name="Other" value="otro">otro</button>
                <input type="button" name="other2" value="otro2" onclick="alert('hola');" />
             
         </form>
         <?php
            echo "<p>$name</p>";
            echo "<p>$age</p>";
         ?>
    </body>
    
</html>

        <!--
        <form action="accion.php" method="post">
            
            <p>Nom: <input type="text" name="nombre" value="" /></p>
            
            <p><input type="submit" /> 
                <input type="reset" />
            </p> 
                  
        </form>
        -->
