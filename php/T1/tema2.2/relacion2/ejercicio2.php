<?php
$arr=[3,3,3,3];

print("La media de esos numeros es: ".media($arr));
function media($arr){
    $total=0;
    foreach ($arr as $key) {
        $total+=$key;
    }

    $total=$total/count($arr);

    return $total;
}
?>