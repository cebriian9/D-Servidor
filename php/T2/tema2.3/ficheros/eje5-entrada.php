<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje5</title>
</head>

<body>
    <h3>Formumaliro simple</h3>

    <form action="eje1-lectura.php" method="post">
        <span>Texto a buscar <input type="text" name="cancion" id="cancion"></span><br><br>

        <?php if (empty(trim($_REQUEST['cancion'])) && (isset($_REQUEST['enviar']))) {
        ?>
            <span style="color: red;">No no amigo el titulo me lo pones</span> <br><br><br>
        <?php
        } ?>

        <span>Buscar en:
            <nav>
                <input type="radio" name="busqueda" value="titulo" id="titulo">Titulo de cancion
                <input type="radio" name="busqueda" value="album" id="album">Nombre de album
                <input type="radio" name="busqueda" value="ambas" id="ambos" checked> Ambas opciones
            </nav>
        </span>
        <span>Genero musical
            <select name="genero" id="genero">
                <option value="todos">todos</option>
                <option value="rock">rock</option>
                <option value="pop">pop</option>
            </select>

        </span>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <h3>Resultado:</h3>

    <?php

    foreach ($_REQUEST as $key => $value) {

        if (!empty($value)) {
            echo ("La respuesta de $key es: $value<br>");
        }
    }
    ?>

</body>

</html>