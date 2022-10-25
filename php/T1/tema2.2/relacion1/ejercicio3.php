<?php
$dias=5;

verMinutos($dias);


function verMinutos($dias)
{
    $minutos=$dias*1440;

    printf("%d dia, son %d minutos",$dias,$minutos);
}
?>