<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje1lectura</title>
</head>

<body>

    <?php

    $original = fopen("../formularios/eje1.php", "r");
    $salida = fopen("salida1.txt", "w");

    if (!$salida) {
        die("Error al abrir fichero");
    }

    $bits = 0;
    
    while (!feof($original)) {
        $linea = fgets($original);
        $bits += fwrite($salida, $linea);
    }

    fclose($original);
    fclose($salida);

    echo "bits escritos $bits";

    ?>
</body>

</html>