<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje2R</title>
</head>
<body>
<?php
        
        $contador=0;

        foreach ($_REQUEST as $key => $value) {

            if (is_array($value)) {
                foreach ($value as $value2) {
                    echo ("respuesta $key: $value2<br>");
                }
            }else {
                echo ("respuesta $key: $value<br>");
            }

            $contador++;
        }
        ?>
    <a href="eje2.php">Nueva busqueda</a>
</body>
</html>

        

        

