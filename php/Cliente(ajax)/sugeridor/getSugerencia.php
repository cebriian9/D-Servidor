<?php
$arr=array(
    "almeria",
    "granada",
    "barcelona"
);

$arr[]="almeria";
$arr[]="granada";

$param=$_REQUEST["param"];

$sugerencia="";

if ($param!=="") {
    $param=strtolower($param);
}

$len=strlen($param);

foreach ($arr as $ciudad ) {
    if (strstr($param,substr($nombre,0,$len))) {
        if ($sugerencia==="") {
            $sugerencia=$nombre;
        }else {
            
        }
    }
}