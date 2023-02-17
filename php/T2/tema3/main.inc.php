<?php


@$conexion = new mysqli('localhost', 'dwes', 'abc123.', 'inmobiliaria');
$error = $conexion->connect_errno;
if ($error != null) {
    echo "Error $error conectando a la base de datos: $conexion->connect_error";
    exit();
}


function mostrarBD($conexion, $filtro)
{
    $sql = "SELECT * FROM noticias WHERE categoria $filtro";

    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_object();

    while ($row != null) {
        echo "<tr>";
        echo "<td>$row->titulo </td>";
        echo "<td>$row->texto </td>";
        echo "<td>$row->categoria </td>";
        echo "<td>$row->fecha </td>";

        //si imgane es null no muestro nada
        if ($row->imagen != null) {
            echo "<td><img src='img/$row->imagen' alt='$row->imagen' class='img-fluid'> </td>";
        } else {
            echo "<td> </td>";
        }

        echo "</tr>";
        //bajo de linea
        $row = $resultado->fetch_object();
    }
}

function mostrarBDBorrado($conexion)
{
    //mostrar base de datos
    $sql = "SELECT * FROM noticias";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_object();
    while ($row != null) {
        echo "<tr>";
        echo "<td>$row->titulo </td>";
        echo "<td>$row->texto </td>";
        echo "<td>$row->categoria </td>";
        echo "<td>$row->fecha </td>";

        //si imgane es null no muestro nada
        if ($row->imagen != null) {
            echo "<td><img src='img/$row->imagen' alt='$row->imagen' class='img-fluid'> </td>";
        } else {
            echo "<td> </td>";
        }
        echo "<td> <input type='checkbox' name='borrado[]' value='$row->id'> </td>";
        echo "</tr>";
        //bajo de linea
        $row = $resultado->fetch_object();
    } //mostrar base de datos

    if (isset($_REQUEST['borrado'])) {
        $idNoticias = $_REQUEST['borrado'];
        $idNoticias = implode(",", $idNoticias);

        $sql = "DELETE FROM noticias WHERE id IN ($idNoticias)";


        unlink('img/' . $row->imagen);
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


    //compruebo que la imagen se ha introducido comparandola con una cadena vacia
    if (strcmp($_FILES['foto']['name'],"")) {

        //si foto esta bien y guardada devuelve el nombre, sino false
        $foto = guardarFoto();

    } else {
        $foto = null;
    }

    //si foto es false la foto esta mal y no se sube la noticia
    if ($foto !== false) {
        $sql = "INSERT INTO noticias  VALUES(null,'$titulo','$texto','$categoria','$fecha','$foto')";

        $conexion->query($sql);
    }
}


function guardarFoto()
{
    //comprobamos que la foto se ha subido
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {

        //comptobamos tipo 
        $tipo = mime_content_type($_FILES['foto']['tmp_name']);
        if (strstr($tipo, "image")) {

            //nombre unico con time()
            $nombre = time() . $_FILES['foto']['name'];
            //lo movemos
            if (move_uploaded_file($_FILES['foto']['tmp_name'], "img/" . $nombre)) {
                //se movio

            } else {
                echo "<p class='text-danger'>no se pudo guardar</p>";
                $nombre = false;
            }
        } else {
            //no es una foto
            echo "<p class='text-danger'>el fichero debe de ser una foto</p>";
            $nombre = false;
        }
    } else {
        echo "<p class='text-danger'>error al subir el archivo</p>";
        $nombre = false;
    }
    return $nombre;
}
