<?php
$num1=1;
$num2=2;
print("num1=$num1 ,num2=$num2 <br>");
print("Cambio <br>");
print(cambio($num1,$num2));
function cambio($num1,$num2){
    $soporte=$num1;
    $num1=$num2;
    $num2=$soporte;

    return "num1=$num1 ,num2=$num2";
}
?>