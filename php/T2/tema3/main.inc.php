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
        for ($i = 0; $i < 6; $i++) {
            echo "<td>$row[$i]</td>";
        }
        echo "</tr>";
    }
}

function insertarNoticia($conexion)
{
    $id = $conexion->query("SELECT max(id) from noticias");
    $id=$id->fetch_object();
    $id++;
    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];
    $categoria = $_REQUEST['categoria'];
    $fecha=date('d-m-y');
    if (!empty($_FILES['foto']['tmp_name'])) {
        $foto=$_FILES['foto']['tmp_name'];
    }else {
        $foto=null;
    }

    $sql = "INSERT INTO noticias VALUES($id,'$titulo','$texto','$categoria','$fecha','$foto')";

    $conexion->query($sql);
}
