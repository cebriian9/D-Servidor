<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregacion de noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>
    <div class="container my-5">
        <p class="h3 text-primary">Agrega noticias chidas</p>

        <form action="#" method="post" enctype="multipart/form-data" class="border p-4 ">
            <div class="row">
                <div class="col">
                    <p>Titulo*</p>
                </div>
                <div class="col-6">
                    <input type="text" name="titulo">
                    <?php
                    if (isset($_REQUEST['enviar']) && empty(trim($_REQUEST['titulo']))) {
                        echo "<p class='text-danger'>El campo esta vacio </p>";
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Texto*</p>
                </div>
                <div class="col-6">
                    <textarea name="texto" id="text" cols="25" rows="5"></textarea>
                    <?php
                    if (isset($_REQUEST['enviar']) && empty(trim($_REQUEST['texto']))) {
                        echo "<p class='text-danger'>El campo esta vacio </p>";
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Categoria</p>
                </div>
                <div class="col-6">
                    <select name="categoria">
                        <option value="promociones">promociones</option>
                        <option value="ofertas">Ofertas</option>
                        <option value="costas">Costas</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>imagen</p>
                </div>
                <div class="col-6">
                    <input type="file" name="foto">
                </div>
            </div>
            <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Agregar noticia</button>
        </form>
        <a href="mostrarNoticia.php">Mostrar noticias</a>
        <a href="agregarNoticia.php">Agregar noticias</a>
        <a href="eliminarNoticia.php">Eliminar noticias</a>
        <?php
        include "main.inc.php";

        if (isset($_REQUEST['enviar']) && !empty(trim($_REQUEST['titulo'])) && !empty(trim($_REQUEST['texto']))) {
            insertarNoticia($conexion);
        } else {
            if (isset($_REQUEST['enviar'])) {
                echo "<p class='text-danger'>Rellene los campos vacios </p>";
            }
        }
        ?>


    </div>
</body>

</html>