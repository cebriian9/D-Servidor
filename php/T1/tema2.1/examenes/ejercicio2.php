<?php
$num = 12;

$formato = 7;

switch ($formato) {
    case 1:
        print($num);
        break;
    case 2:
        print(dechex($num));
        break;
    case 3:
        print(strtoupper(dechex($num)));
        break;
    case 4:
        print(decoct($num));
        break;
    case 5:
        print(exp($num));
        break;
    case 6:
        print(decbin($num));
        break;


    default:
        print("Formato incorrecto!!!");
        break;
}
?>