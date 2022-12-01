<?php

$UE=array(
    'españa'=>"madrid",
    'francia'=>"paris",
    'alemania'=>"berlin",
    'italia'=>"romaa"
);

print(end($UE)." ");
for ($i=0; $i < count($UE); $i++) { 
    print(prev($UE)." ");
}

?>