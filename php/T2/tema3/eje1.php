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
    <div class="container">
        <p class="h3 text-primary my-5">Consulta de noticias chidas</p>

        <table class="table">
            <tr class="table-primary">
                <th class="col-1">ID</th>
                <th class="col-4">Titulo</th>
                <th class="col-6">Texto</th>
                <th>Categoria</th>
                <th class="col-3">Fecha</th>
                <th class="col-1">Imagen</th>
            </tr>
            <?php
            
            include "eje1.inc.php";
            
            ?>
        </table>
    </div>
</body>

</html>