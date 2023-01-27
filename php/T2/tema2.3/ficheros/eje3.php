<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje3</title>
</head>

<body>
    <?php
    
    $dir = "./";
    $files = scandir($dir);
    echo "<h1>Listado de archivos</h1>";
    foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
            echo "$file - Última modificación: " . date("d/m/Y H:i:s", filemtime($dir . $file));
            if (is_file($file)) {
                echo " - Tamaño: " . filesize($dir . $file) . " bytes";
            }
            echo "</br>";
        }
    } 
    ?>
</body>

</html>