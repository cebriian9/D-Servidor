<?php
$num=5;

print("Resultado: ".fibonaxi($num));

function fibonaxi($num){
    if ($num>0) {
        $num*=($num-1);
        $num--;
        fibonaxi($num);
    }    
    
}
?>