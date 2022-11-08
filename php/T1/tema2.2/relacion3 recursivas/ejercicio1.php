<?php
$num=5;

print("Resultado: ".fibonaxi($num));

function fibonaxi($num){
    $total=0;      
    if ($total<=$num) {
        $total=$total+fibonaxi($total+1);
        return $total;
    }
    return $total;
}
?>