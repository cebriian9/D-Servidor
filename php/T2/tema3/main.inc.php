<?php


@$conexion = new mysqli('localhost', 'dwes', 'abc123.', 'inmobiliaria');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}


function mostrarBD($conexion)
{
    $sql = "SELECT * FROM noticias";

    $resultado = $conexion->query($sql);

    while ($row = $resultado->fetch_array()) {
        echo "<tr>";
        for ($i = 1; $i < 6; $i++) {
            echo "<td>$row[$i]</td>";
        }
        echo "</tr>";
    }
}

function mostrarBDBorrado($conexion)
{
    $sql = "SELECT * FROM noticias";

    $resultado = $conexion->query($sql);

    while ($row = $resultado->fetch_array()) {
        echo "<tr>";
        for ($i = 1; $i < 6; $i++) {
            echo "<td>$row[$i]</td>";
        }
        echo "<td> <input type='checkbox' name='borrado[]' value='$row[0]'> </td>";
        echo "</tr>";
    }

    if (isset($_REQUEST['borrado'])) {
        $idNoticias = $_REQUEST['borrado'];
        $idNoticias = implode(",", $idNoticias);

        $sql = "DELETE FROM noticias WHERE id IN ($idNoticias)";

        $conexion->query($sql);

        header("location:eliminarNoticia.php");
    }

    
}

function insertarNoticia($conexion)
{
    

    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];
    $categoria = $_REQUEST['categoria'];
    $fecha = date('y-m-d');

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
    } else {
        $foto = NULL;
    }

    $sql = "INSERT INTO noticias  VALUES(null,'$titulo','$texto','$categoria','$fecha','$foto')";

    $conexion->query($sql);
}


function guardarFoto(){
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
}