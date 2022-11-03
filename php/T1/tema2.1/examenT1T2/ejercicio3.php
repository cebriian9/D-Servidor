<?php
$email="joseju@gmail.com";

print("Usuario: ".strtok($email,"@")."<br>");
print("Dominio: ".strtok("@"));
?>