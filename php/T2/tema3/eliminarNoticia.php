<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminacion de noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <p class="h3 text-primary ">Consulta de noticias chidas</p>

        <form action="#" method="post">
            <table class="table">
                <tr class="table-primary">

                    <th class="col-4">Titulo</th>
                    <th class="col-6">Texto</th>
                    <th>Categoria</th>
                    <th class="col-3">Fecha</th>
                    <th class="col-1">Imagen</th>
                    <th class="col-1">Borrar</th>
                </tr>
                <?php

                include "main.inc.php";
                mostrarBDBorrado($conexion);
                ?>
            </table>
            <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Eliminar noticias</button><br><br>

        </form>

        <a href="agregarNoticia.php">Agregar noticias</a>
    </div>
</body>

</html>