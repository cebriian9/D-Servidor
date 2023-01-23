<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuesta eje1</title>
</head>

<body>
    <?php
    $cancion = $_REQUEST['cancion'];

    echo ("La cancion es:" . $_REQUEST['cancion'] . "<br>");
    echo ("La cancion es:" . $_REQUEST['busqueda'] . "<br>");
    echo ("La cancion es:" . $_REQUEST['genero'] . "<br>");
    ?>


    <a href="eje1.php">Nueva busqueda</a>
</body>

</html>