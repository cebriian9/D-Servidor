<?php

$colores= array(
    'colores fuertes' => array(
            'rojo'=>"FF0000",
            'verde'=>"00FF00",
            'azul'=>"0000FF",
    ),
    'colores suaves'=> array(
            'rosa'=>"FE9ABC",
            'amarillo'=>"FDF189",
            'malva'=>"BC8F8F"
        )
    );
echo "<table>";
foreach ($colores as $tipo =>$color) {
    echo "<tr>";
    echo "<td> $tipo:</td>";
    foreach ($color as $nombre => $codigo) {
        echo "<td style='background-color: #$codigo;'>$nombre:$codigo</td> ";
    }
    echo "</tr>";
}   
echo "</table>";

print("Se encuenta el color 'FF88CC' y el color 'FF0000' en el array:<br>");


if (in_array(array("FF88CC"),$colores)) {
    print("FF88CC si esta<br>");
}else{
    print("FF88CC no esta<br>");
}

if (in_array(array("FF0000"),$colores)) {
    print("FF0000 si esta<br>");
}else{
    print("FF0000 no esta<br>");
}
?>