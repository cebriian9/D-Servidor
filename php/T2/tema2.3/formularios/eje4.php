<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje4</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="titulo"><b>titulo*</b></label>
        <input type="text" name="titulo" id="titulo"><br>

        <?php

        if (isset($_REQUEST['enviar']) && empty(trim($_REQUEST['titulo'])))
            echo ("<span style='color:red;'> Debes introducir un titulo!! </span> <br>");
        ?>

        <label for="noticia"><b>contenido</b></label><br>
        <textarea name="noticia" id="noticia" cols="30" rows="10" placeholder="Inserte noticia"></textarea><br>

        <?php
        if (isset($_REQUEST['enviar']) && empty(trim($_REQUEST['noticia'])))
            echo ("<span style='color:red;'> Debes introducir el contenido!! </span> <br>");
        ?>


        <label for="imagen"><b>imagen</b></label>
        <input type="file" name="imagen" id="imagen"><br>

        <input type="submit" value="enviar" name="enviar">
    </form>

</body>

</html>