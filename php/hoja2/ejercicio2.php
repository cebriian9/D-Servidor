2. Realiza una página PHP que permita chequear si en una caja de texto se introduce una dirección
de correo válida. Una dirección de correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si
la dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha
dirección.

<form action="ejercicio2.php" method="post">
    <p>introduce tu correo:</p>
        <input type="text" name="correo"/><br>
        <input type="submit" name="boton" value="Enviar prro"/>

        <p>tu correo es: <?php  echo $_GET['correo']; ?></p>

<?php
    $correo = $_GET['correo'];

    if (str_contains($correo, '@') && str_contains($correo, '.')) {
        echo 'Tu correo esta chido ';
        
    } else {
        echo 'Tu correo no esta chido ';
    }
    
?>

<p>Tu nombre es: <?php echo strtok($correo,"@") ?></p>
<p>Tu dominio es: <?php echo strtok("@") ?></p>
</form>





