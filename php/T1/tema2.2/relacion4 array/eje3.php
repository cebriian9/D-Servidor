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

foreach ($colores as $tipo =>$color) {
    echo "$tipo:";
    foreach ($color as $nombre => $codigo) {
        echo "<tr style='background-color:$codigo;'>$nombre:$codigo</td> ";
    }

    echo "<br>";
}   


echo"
<table>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
"

?>
