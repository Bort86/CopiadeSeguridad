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
        
        $surname="Rodriguez";
        
echo <<<EOT
        <h2>option 3:</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>name</th>
                    <th>surname</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>Carlos</td>
                   <td>$surname</td>
                </tr>
            </tbody>
        </table>
EOT;
        
            
        ?>
    </body>
</html>
