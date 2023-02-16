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
