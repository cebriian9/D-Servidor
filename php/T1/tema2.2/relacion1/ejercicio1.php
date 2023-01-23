<?php

function calculaCantidad($años,$aportacion,$interes){
    
    $resultado=$aportacion;
    for ($i=0; $i < $años; $i++) { 
        $resultado+=($resultado*$interes/100);
    }
    
    return round($resultado,2);
}

$interes=5;
echo "<p><b>El interés actual es $interes%.</b></p>" ;
echo " <p>Si usted deposita 100 &#x20AC; hoy, sus ahorros crecerán a " ;
echo calculaCantidad(5 , 100,$interes) ;
echo "&#x20AC; en 5 años.</p>" ;
echo " <p>Si usted deposita 1.500&#x20AC; hoy, sus ahorros crecerán a " ;
echo calculaCantidad(20 , 1500,$interes) ;
echo "&#x20AC; después de 20 años.</p>" ;
?>