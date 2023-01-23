<?php
$cad1="Hola9";
$cad2="Hola10";
$modo=4;
$nCaracteres=4;


switch ($modo) {
    case 1:
        modo1($cad1,$cad2);
        break;
    case 2:
        modo2($cad1,$cad2);
        break;
    case 3:
        modo3($cad1,$cad2);
        break;
    case 4:
        modo4($cad1,$cad2,$nCaracteres);
        break;
    
    default:
        print("Modo incorrecto");
        break;
}

function modo1($cad1,$cad2){
    print("modo 1 <br>");
    if ($cad1>$cad2) {
        print("$cad1 es mayor que $cad2");
    }else if($cad1<$cad2)  {
        print("$cad2 es mayor que $cad1");
    }else{
        print("$cad1 es igual $cad2");
    }
}

function modo2($cad1,$cad2){
    print("modo 2 <br>");
    if (strcasecmp($cad1,$cad2)<0) {
        print("$cad2 es mayor que $cad1");
    }else if (strcasecmp($cad1,$cad2)>0) {
        print("$cad1 es mayor que $cad2");
    }else{
        print("$cad1 es igual $cad2");

    }
}

function modo3($cad1,$cad2){
    print("modo 3 <br>");
    if (strlen($cad1)>strlen($cad2)) {
        print("$cad1 es mayor que $cad2");
    }else if (strlen($cad1)<strlen($cad2)) {
        print("$cad2 es mayor que $cad1");
    }else{
        print("$cad1 es igual que $cad2");
    }
}

function modo4($cad1,$cad2,$nCaracteres){
    $cad1=substr($cad1,0,$nCaracteres);
    $cad2=substr($cad2,0,$nCaracteres);
    print("modo 4 <br>");
    if ($cad1>$cad2) {
        print("$cad1 es mayor que $cad2");
    }else if($cad1<$cad2)  {
        print("$cad2 es mayor que $cad1");
    }else{
        print("$cad1 es igual $cad2");
    }
}
?>