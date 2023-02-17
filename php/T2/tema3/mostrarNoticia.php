<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>casa linda Raul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <p class="h3 text-primary ">Consulta de noticias chidas</p>

        <p>Categorias: <!--DISTINCT. un select de todas las categorias con distinct no se repita y mostrarlo y parafernalias--></p>

        <form action="#" method="post" class="mb-4">
        <select name="filtro" id="" class="p-1">
        <option value="">Todo</option>
            <option value="='promociones'">Promociones</option>
            <option value="='ofertas'">ofertas</option>
            <option value="='costas'">costas</option>
        </select>
        
        <button type="submit" name="enviar" value="enviar" class="btn btn-primary p-1">Filtrar</button>
        </form>

        <table class="table">
            <tr class="table-primary">

                <th class="col-4">Titulo</th>
                <th class="col-6">Texto</th>
                <th>Categoria</th>
                <th class="col-3">Fecha</th>
                <th class="col-1">Imagen</th>

            </tr>
            <?php

            include "main.inc.php";
            mostrarBD($conexion, $_REQUEST["filtro"]);
            ?>
        </table>

        <a href="mostrarNoticia.php">Mostrar noticias</a>
        <a href="agregarNoticia.php">Agregar noticias</a>
        <a href="eliminarNoticia.php">Eliminar noticias</a>
    </div>
</body>

</html>