<?php
$UE=array(
    'españa'=>"adrid",
    'francia'=>"paris",
    'alemania'=>"berlin",
    'italia'=>"roma"
);

foreach ($UE as $pais =>$capital) {
    print("La capital de $pais es $capital <br>");
}
echo"<br><br>";

$UEPais=$UE;
ksort($UEPais);
print("Union Europea ordenada por pais:<br>");
foreach ($UEPais as $pais =>$capital) {
    print("La capital de $pais es $capital <br>");
}



echo"<br><br>";
$UECapital=$UE;
asort($UECapital);
print("Union Europea ordenada por capital:<br>");
foreach ($UECapital as $pais =>$capital) {
    print("La capital de $pais es $capital <br>");
}


?>