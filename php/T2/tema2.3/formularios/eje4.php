<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje4</title>
</head>

<body>

    <p>formulario:</p>
    <?php
    // Comprobación de si se ha pulsado el botón enviar
    if (isset($_REQUEST['enviar'])) {
        // Asiganción de variables y eliminación de espacios en la búsqueda
        $titulo = ($_REQUEST['titulo']);
        $noticia = trim($_REQUEST['noticia']);
        
        

    }

    if (empty($_REQUEST['titulo']) || empty($_REQUEST['noticia'])) {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
            <label for="titulo"><b>titulo*</b></label>
            <input type="text" name="titulo" id="titulo" value="<?php echo ("$titulo") ?>"><br>

            <?php

            if (isset($_REQUEST['enviar']) && empty(trim($_REQUEST['titulo'])))
                echo ("<span style='color:red;'> Debes introducir un titulo!! </span> <br>");
            ?>

            <label for="noticia"><b>contenido</b></label><br>
            <textarea name="noticia" id="noticia" cols="30" rows="10" placeholder="Inserte noticia"><?php echo ("$noticia") ?></textarea><br>

            <?php
            if (isset($_REQUEST['enviar']) && empty(trim($_REQUEST['noticia'])))
                echo ("<span style='color:red;'> Debes introducir el contenido!! </span> <br>");
            ?>


            <label for="imagen"><b>imagen</b></label>
            <input type="file" name="imagen" id="imagen"><!--falta que la imagen se quede--><br>

            <?php
            if (isset($_REQUEST['enviar']) && empty($_FILES['imagen']['prueba']))
                echo ("<span style='color:red;'> Debes adjuntar una foto!! </span> <br>");
            ?>

            <input type="submit" value="enviar" name="enviar">
        </form>
    <?php
    } else {
    ?>

        <p>Titulo: <?php echo $_REQUEST['titulo']; ?></p>
        <p>Noticia: <?php echo $_REQUEST['noticia']; ?></p>
        <p>imagen: <?php echo $_FILES['imagen']['prueba']; ?></p>
        <?php
        echo "name:".$_FILES['imagen']['prueba']."\n";
        echo "tmp_name:".$_FILES['imagen']['tmp_name']."\n";
        echo "size:".$_FILES['imagen']['size']."\n";
        echo "type:".$_FILES['imagen']['type']."\n";
        ?>

        <a href="eje4.php">[Insertar otra noticia]</a>

    <?php
    }
    ?>



</body>

</html>