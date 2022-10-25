<?php
$num=4;

sumatoria($num);

function sumatoria($num)
{
    $resultado=0;
    for ($i=0; $i < $num; $i++) { 
        $resultado+=$i;
    }

    print("La sumatoria de $num es $resultado");
}
?>