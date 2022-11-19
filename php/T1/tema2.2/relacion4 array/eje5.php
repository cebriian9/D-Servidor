<?php
$pila=array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
$pila1=$pila;
asort($pila1);

foreach ($pila1 as $key => $value) {
    print("$key = $value ");
}
echo "<br>";

$pila1=$pila;
arsort($pila1);
foreach ($pila1 as $key => $value) {
    print("$key = $value ");
}
echo "<br>";

$pila1=$pila;
ksort($pila1);
foreach ($pila1 as $key => $value) {
    print("$key = $value ");
}
echo "<br>";

$pila1=$pila;
sort($pila1);
foreach ($pila1 as $key => $value) {
    print("$key = $value ");
}

echo "<br>";

$pila1=$pila;
rsort($pila1);
foreach ($pila1 as $key => $value) {
    print("$key = $value ");
}
?>