<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje4.2</title>
</head>
<body>
    <?php

    $nombre=$_REQUEST['nombre'];
    $comentario=$_REQUEST['comentario'];

    $file=fopen("datos.txt","a");
    
    if (!$file) {
        die("error al abrir");
    }

    $dato="---------<br>\nNombre: $nombre <br>\nComentario: $comentario <br>\n---------<br>\n";

    fwrite($file,$dato);

    echo "Los datos se guardaron chido <br>";
    print ($dato);

    fclose($file);
    ?>

    <a href="eje4.3.php">[Ver fichero completo]</a>
</body>
</html>