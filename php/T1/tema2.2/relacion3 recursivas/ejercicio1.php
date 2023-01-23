<?php
$n = 3;

print("Resultado: " . fib($n));

function fib($n)
{
    if ($n < 2)
        return $n;

    if ($n > 1)
        return fib($n - 1) + fib($n - 2);

}



?>