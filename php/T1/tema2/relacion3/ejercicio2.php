<?php
$correo="JuanPeri45@gmail.com";

print("usuario: ".strtok($correo,"@")."<br>");
print("dominio: ".strtok("@"));
?>