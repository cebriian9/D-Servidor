<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje4.3</title>
</head>

<body>
    <h3>Datos.txt</h3>
    <?php

    $datos = @fopen("datos.txt", "r");
    //leo datos un total de (tamaño de datos)
    echo (fread($datos, filesize("datos.txt")));
    
    fclose($datos);

    ?>
</body>

</html>