<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje2</title>
</head>
<body>
    
    <?php
    $file=fopen("visitas.txt", "r+");

    if (!$file) {
        die("Error al abrir fichero");
    }

    $contador= fgets($file);

    $contador=(int)$contador;
    $contador++;

    fseek($file, 0);
    fwrite($file, $contador);

    echo"$contador";

    fclose($file);
    ?>
</body>
</html>