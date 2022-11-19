<?php
$nums=array();

for ($i=0; $i < 10; $i++) { 
    $numero=random_int(1,10);
    array_push($nums,$numero);
}

$cont=0;

foreach ($nums as $key) {
    if ($key==2) {
        $cont++;
    }
}

echo "el numero 2 aparece $cont";
?>