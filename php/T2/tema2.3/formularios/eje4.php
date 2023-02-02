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
    //comporbar si entra por envio o por copiar enlace
    if (isset($_REQUEST['enviar'])) {
        //pocesar datos 
        echo "El titulo : " . $_REQUEST['titulo'] . "<br>";
        echo "El titulo : " . $_REQUEST['noticia'] . "<br>";

        if (!empty($_FILES['imagen']['name'])) {
            //comprobamos que la imagen se ha subido
            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {

                //comptobamos tipo 
                $tipo = mime_content_type($_FILES['imagen']['tmp_name']);
                if (strstr($tipo, "image")) {

                    //nombre unico con time()

                    $nombre = time() . $_FILES['imagen']['name'];
                    //lo movemos
                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], "img/".$nombre)) {
                        //se movio
                        // y se mostra

                        echo "<img src='img/$nombre' alt='foto subida por usuario' width='100px' height='100px'>";
                    } else {
                        echo "no se pudo guardar";
                    }
                } else {
                    //no es una imagen
                    echo "el fichero debe de ser una imagen";
                }
            } else {
                echo 'error al subir el archivo';
            }
        } else {
            echo "debes subir una imagen";
        }
    } else {
        //cargar form
    ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="titulo"><b>titulo*</b></label>
            <input type="text" name="titulo" id="titulo"><br>

            <label for="noticia"><b>contenido</b></label><br>
            <textarea name="noticia" id="noticia" cols="30" rows="10" placeholder="Inserte noticia"></textarea><br>

            <label for="imagen"><b>imagen</b></label>
            <input type="file" name="imagen"><br>

            <input type="submit" value="enviar" name="enviar">
        </form>
    <?php
    }
    ?>




</body>

</html>