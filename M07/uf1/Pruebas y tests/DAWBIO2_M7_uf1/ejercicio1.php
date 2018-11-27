<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo formulario</title>
    </head>
    
    <<body>
        <h1>Formulario</h1>
        <form action= "<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <fieldset> 
                <label>Introduce tu contraseña: </label>
                <input type="password" name="contra" /> <br>
            </fieldset>
            
            <fieldset>
                <label> Choose your mood</label>
                <input type="radio" name="radio1" > Blue <br>
                <input type="radio" name="radio2" > Black <br>
                <input type="radio" name="radio3" > Red <br>
            </fieldset>

            <fieldset>
                <input type="hidden" name="secreto" value=date
            </fieldset>
            
            <fieldset>
                <legend>Botones</legend>
                <input type="submit" name="send" value="Enviar" />
                <input type="reset" name="delete" value="Borrar botón" />               
            </fieldset> 
            

        </form>   
    </body>