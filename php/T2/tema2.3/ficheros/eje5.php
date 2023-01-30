<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelmass-RaulRodriguez</title>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            border: 1px solid black;
            background-color: #fefecc;
            padding: 4px;
        }

        th,
        td {
            border: 1px solid white;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Agencia de viajes travelmass</h3>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Destino</th>
                <th>Diracion</th>
                <th>Salida</th>
            </tr>

            <?php
            //escribimos

            //abrimos con "a"
            $viajes = fopen("viajes.txt", "a");

            if (!$viajes) {
                die("Error al abrir fichero1");
            }

            if (empty(trim($_REQUEST['nombre'])) || empty(trim($_REQUEST['destino'])) || empty(trim($_REQUEST['duracion'])) || empty(trim($_REQUEST['salida']))) {
                echo "😡😡😡😡Debes de rellenar todos los campos😡😡😡😡";
            }else {
                fwrite($viajes, $_REQUEST['nombre'] . ":" . $_REQUEST['destino'] . ":" . $_REQUEST['duracion'] . ":" . $_REQUEST['salida'] . "\n");
            }


            //cerramos
            fclose($viajes);


            //comprobamos que exista
            if (file_exists("viajes.txt")) {
                //abrimos para lectura
                $viajes = fopen("viajes.txt", "r");

                if (!$viajes) {
                    die("Error al abrir fichero2");
                }

                //bucle hasta acabar el fichero
                while (!feof($viajes)) {
                    echo "<tr>";

                    //sacamos una fila y de cada fila un "dato" con strtok
                    $fila = fgets($viajes);
                    $dato = strtok($fila, ":");

                    //vamos iterando dato tras dato con strtok
                    while ($dato) {
                        echo "<td>$dato</td>";
                        $dato = strtok(":");
                    }

                    echo "</tr>";
                }
            } else {
                echo "Error al abrir el fichero3";
            }

            ?>

        </table>
        <br><br><br>

        <form action="#" method="post">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" id="nom"></td>
                </tr>
                <tr>
                    <td>Destino:</td>
                    <td><input type="text" name="destino" id="nom"></td>
                </tr>
                <tr>
                    <td>Duracion:</td>
                    <td><input type="text" name="duracion" id="nom"></td>
                </tr>
                <tr>
                    <td>Salida:</td>
                    <td><input type="text" name="salida" id="nom"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Subir" name="enviar"></td>
                </tr>
            </table>
        </form>

    </div>

</body>

</html>