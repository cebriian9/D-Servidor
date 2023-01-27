<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje4</title>
</head>
<body>
    <form action="#" method="post">
        <p>nombre</p>
        <input type="text" name="nombre">

        <p>comentario:</p>
        <textarea name="comentario" id="na" cols="30" rows="10"></textarea>
<br>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?php
        $file=fopen("comentarios.txt", "r+");

        if (!$file) {
            die("Error al abrir");
        }

        fclose($file);
    ?>
</body>
</html>